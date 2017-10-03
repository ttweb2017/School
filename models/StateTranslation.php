<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "state_translation".
 *
 * @property string $language_id
 * @property string $state_name
 * @property string $state_id
 *
 * @property Language $language
 * @property State $state
 */
class StateTranslation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'state_translation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_id', 'state_name', 'state_id'], 'required'],
            [['language_id', 'state_id'], 'integer'],
            [['state_name'], 'string', 'max' => 65],
            [['state_name'], 'unique'],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => State::className(), 'targetAttribute' => ['state_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'language_id' => Yii::t('app', 'Language ID'),
            'state_name' => Yii::t('app', 'State Name'),
            'state_id' => Yii::t('app', 'State ID'),
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
    public function getState()
    {
        return $this->hasOne(State::className(), ['id' => 'state_id']);
    }
}
