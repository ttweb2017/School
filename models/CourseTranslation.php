<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course_translation".
 *
 * @property string $language_id
 * @property string $course_id
 * @property string $course_name
 * @property string $course_description
 * @property string $course_period
 * @property double $course_price
 * @property string $course_level
 *
 * @property Course $course
 * @property Language $language
 */
class CourseTranslation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course_translation';
    }

	/**
     * @set language
     */
	public static function find(){
		$id = Yii::$app->session->get('langId');
		return parent::find()->where(['language_id' => $id]);
	}
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_id', 'course_id', 'course_name', 'course_period', 'course_price', 'course_level'], 'required'],
            [['language_id', 'course_id'], 'integer'],
            [['course_price'], 'number'],
            [['course_name'], 'string', 'max' => 150],
            [['course_description'], 'string', 'max' => 250],
            [['course_period', 'course_level'], 'string', 'max' => 65],
            [['language_id', 'course_id'], 'unique', 'targetAttribute' => ['language_id', 'course_id']],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['course_id' => 'id']],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'language_id' => Yii::t('app', 'Language ID'),
            'course_id' => Yii::t('app', 'Course ID'),
            'course_name' => Yii::t('app', 'Course Name'),
            'course_description' => Yii::t('app', 'Course Description'),
            'course_period' => Yii::t('app', 'Course Period'),
            'course_price' => Yii::t('app', 'Course Price'),
            'course_level' => Yii::t('app', 'Course Level'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }
}
