<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "school".
 *
 * @property string $id
 * @property string $tel1
 * @property string $tel2
 * @property string $tel3
 * @property string $email
 * @property string $image
 * @property string $directory
 *
 * @property SchoolHasCourse[] $schoolHasCourses
 * @property Course[] $courses
 * @property SchoolTranslation[] $schoolTranslations
 * @property TeacherHasSchool[] $teacherHasSchools
 * @property Teacher[] $teachers
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tel1'], 'required'],
            [['tel1', 'tel2', 'tel3'], 'string', 'max' => 30],
            [['email', 'image'], 'string', 'max' => 65],
            [['directory'], 'string', 'max' => 75],
            [['tel1'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tel1' => Yii::t('app', 'Tel1'),
            'tel2' => Yii::t('app', 'Tel2'),
            'tel3' => Yii::t('app', 'Tel3'),
            'email' => Yii::t('app', 'Email'),
            'image' => Yii::t('app', 'Image'),
            'directory' => Yii::t('app', 'Directory'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolHasCourses()
    {
        return $this->hasMany(SchoolHasCourse::className(), ['school_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Course::className(), ['id' => 'course_id'])->viaTable('school_has_course', ['school_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolTranslations()
    {
        return $this->hasMany(SchoolTranslation::className(), ['school_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherHasSchools()
    {
        return $this->hasMany(TeacherHasSchool::className(), ['school_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['id' => 'teacher_id'])->viaTable('teacher_has_school', ['school_id' => 'id']);
    }
}
