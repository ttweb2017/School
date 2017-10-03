<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course_category".
 *
 * @property string $id
 * @property string $image
 * @property string $directory
 *
 * @property Course[] $courses
 * @property CourseCategoryTranslation[] $courseCategoryTranslations
 * @property Language[] $languages
 */
class CourseCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image'], 'string', 'max' => 65],
            [['directory'], 'string', 'max' => 75],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
            'directory' => Yii::t('app', 'Directory'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Course::className(), ['course_category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourseCategoryTranslations()
    {
        return $this->hasMany(CourseCategoryTranslation::className(), ['course_category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguages()
    {
        return $this->hasMany(Language::className(), ['id' => 'language_id'])->viaTable('course_category_translation', ['course_category_id' => 'id']);
    }
}
