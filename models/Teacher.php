<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property string $id
 * @property string $course_id
 * @property string $tel
 * @property string $image
 * @property string $directory
 *
 * @property Course $course
 * @property TeacherTranslation[] $teacherTranslations
 * @property Language[] $languages
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id'], 'required'],
            [['course_id'], 'integer'],
            [['tel'], 'string', 'max' => 20],
            [['image'], 'string', 'max' => 65],
            [['directory'], 'string', 'max' => 75],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['course_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'course_id' => Yii::t('app', 'Course ID'),
            'tel' => Yii::t('app', 'Tel'),
            'image' => Yii::t('app', 'Image'),
            'directory' => Yii::t('app', 'Directory'),
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
    public function getTeacherTranslations()
    {
        return $this->hasMany(TeacherTranslation::className(), ['teacher_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguages()
    {
        return $this->hasMany(Language::className(), ['id' => 'language_id'])->viaTable('teacher_translation', ['teacher_id' => 'id']);
    }
}
