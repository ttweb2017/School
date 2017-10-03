<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "state".
 *
 * @property string $id
 *
 * @property SchoolTranslation[] $schoolTranslations
 * @property StateTranslation[] $stateTranslations
 */
class State extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolTranslations()
    {
        return $this->hasMany(SchoolTranslation::className(), ['state_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStateTranslations()
    {
        return $this->hasMany(StateTranslation::className(), ['state_id' => 'id']);
    }
}
