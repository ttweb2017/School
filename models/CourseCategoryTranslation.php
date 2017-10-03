<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course_category_translation".
 *
 * @property string $language_id
 * @property string $course_category_id
 * @property string $name
 * @property string $description
 *
 * @property CourseCategory $courseCategory
 * @property Language $language
 */
class CourseCategoryTranslation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course_category_translation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_id', 'course_category_id', 'name'], 'required'],
            [['language_id', 'course_category_id'], 'integer'],
            [['name'], 'string', 'max' => 65],
            [['description'], 'string', 'max' => 250],
            [['language_id', 'course_category_id'], 'unique', 'targetAttribute' => ['language_id', 'course_category_id']],
            [['course_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => CourseCategory::className(), 'targetAttribute' => ['course_category_id' => 'id']],
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
            'course_category_id' => Yii::t('app', 'Course Category ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourseCategory()
    {
        return $this->hasOne(CourseCategory::className(), ['id' => 'course_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }
}
