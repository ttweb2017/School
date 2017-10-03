<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher_translation".
 *
 * @property string $language_id
 * @property string $teacher_id
 * @property string $firstname
 * @property string $surname
 * @property string $fathersname
 * @property string $about
 * @property string $field
 * @property string $little_about
 *
 * @property Language $language
 * @property Teacher $teacher
 */
class TeacherTranslation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher_translation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_id', 'teacher_id', 'firstname', 'surname'], 'required'],
            [['language_id', 'teacher_id'], 'integer'],
            [['about'], 'string'],
            [['firstname', 'surname', 'fathersname'], 'string', 'max' => 100],
            [['field'], 'string', 'max' => 250],
            [['little_about'], 'string', 'max' => 300],
            [['language_id', 'teacher_id'], 'unique', 'targetAttribute' => ['language_id', 'teacher_id']],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'language_id' => Yii::t('app', 'Language ID'),
            'teacher_id' => Yii::t('app', 'Teacher ID'),
            'firstname' => Yii::t('app', 'Firstname'),
            'surname' => Yii::t('app', 'Surname'),
            'fathersname' => Yii::t('app', 'Fathersname'),
            'about' => Yii::t('app', 'About'),
            'field' => Yii::t('app', 'Field'),
            'little_about' => Yii::t('app', 'Little About'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
    }
}
