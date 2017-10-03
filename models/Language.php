<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "language".
 *
 * @property string $id
 * @property string $name
 * @property string $code
 * @property string $locale
 * @property string $image
 * @property string $directory
 *
 * @property ArticleCategoryTranslation[] $articleCategoryTranslations
 * @property ArticleCategory[] $articleCategories
 * @property ArticleTranslation[] $articleTranslations
 * @property Article[] $articles
 * @property CourseCategoryTranslation[] $courseCategoryTranslations
 * @property CourseCategory[] $courseCategories
 * @property CourseTranslation[] $courseTranslations
 * @property Course[] $courses
 * @property TeacherTranslation[] $teacherTranslations
 * @property Teacher[] $teachers
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'language';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code', 'locale'], 'required'],
            [['name'], 'string', 'max' => 65],
            [['code', 'locale'], 'string', 'max' => 30],
            [['image', 'directory'], 'string', 'max' => 100],
            [['name'], 'unique'],
            [['code'], 'unique'],
            [['locale'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'code' => Yii::t('app', 'Code'),
            'locale' => Yii::t('app', 'Locale'),
            'image' => Yii::t('app', 'Image'),
            'directory' => Yii::t('app', 'Directory'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleCategoryTranslations()
    {
        return $this->hasMany(ArticleCategoryTranslation::className(), ['language_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleCategories()
    {
        return $this->hasMany(ArticleCategory::className(), ['id' => 'article_category_id'])->viaTable('article_category_translation', ['language_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleTranslations()
    {
        return $this->hasMany(ArticleTranslation::className(), ['language_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['id' => 'article_id'])->viaTable('article_translation', ['language_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourseCategoryTranslations()
    {
        return $this->hasMany(CourseCategoryTranslation::className(), ['language_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourseCategories()
    {
        return $this->hasMany(CourseCategory::className(), ['id' => 'course_category_id'])->viaTable('course_category_translation', ['language_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourseTranslations()
    {
        return $this->hasMany(CourseTranslation::className(), ['language_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Course::className(), ['id' => 'course_id'])->viaTable('course_translation', ['language_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherTranslations()
    {
        return $this->hasMany(TeacherTranslation::className(), ['language_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['id' => 'teacher_id'])->viaTable('teacher_translation', ['language_id' => 'id']);
    }
}
