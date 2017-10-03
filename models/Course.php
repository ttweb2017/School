<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property string $id
 * @property string $course_category_id
 * @property string $course_code
 * @property string $image
 * @property string $directory
 * @property double $price
 * @property int $course_period
 *
 * @property CourseCategory $courseCategory
 * @property CourseTranslation[] $courseTranslations
 * @property Language[] $languages
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_category_id', 'course_code', 'price', 'course_period'], 'required'],
            [['course_category_id', 'course_period'], 'integer'],
            [['price'], 'number'],
            [['course_code'], 'string', 'max' => 45],
            [['image'], 'string', 'max' => 65],
            [['directory'], 'string', 'max' => 75],
            [['course_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => CourseCategory::className(), 'targetAttribute' => ['course_category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'course_category_id' => Yii::t('app', 'Course Category ID'),
            'course_code' => Yii::t('app', 'Course Code'),
            'image' => Yii::t('app', 'Image'),
            'directory' => Yii::t('app', 'Directory'),
            'price' => Yii::t('app', 'Price'),
            'course_period' => Yii::t('app', 'Course Period'),
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
    public function getCourseTranslations()
    {
        return $this->hasMany(CourseTranslation::className(), ['course_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguages()
    {
        return $this->hasMany(Language::className(), ['id' => 'language_id'])->viaTable('course_translation', ['course_id' => 'id']);
    }
}
