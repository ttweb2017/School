<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "school_translation".
 *
 * @property string $school_id
 * @property string $language_id
 * @property string $state_id
 * @property string $school_name
 * @property string $school_address
 * @property string $about
 * @property string $work_hours
 *
 * @property Language $language
 * @property School $school
 * @property State $state
 */
class SchoolTranslation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_translation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id', 'language_id', 'state_id', 'school_name', 'school_address'], 'required'],
            [['school_id', 'language_id', 'state_id'], 'integer'],
            [['about'], 'string'],
            [['school_name'], 'string', 'max' => 65],
            [['school_address', 'work_hours'], 'string', 'max' => 100],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
            [['school_id'], 'exist', 'skipOnError' => true, 'targetClass' => School::className(), 'targetAttribute' => ['school_id' => 'id']],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => State::className(), 'targetAttribute' => ['state_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_id' => Yii::t('app', 'School ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'state_id' => Yii::t('app', 'State ID'),
            'school_name' => Yii::t('app', 'School Name'),
            'school_address' => Yii::t('app', 'School Address'),
            'about' => Yii::t('app', 'About'),
            'work_hours' => Yii::t('app', 'Work Hours'),
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
    public function getSchool()
    {
        return $this->hasOne(School::className(), ['id' => 'school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(State::className(), ['id' => 'state_id']);
    }
}
