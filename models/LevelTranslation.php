<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "level_translation".
 *
 * @property string $level_id
 * @property string $language_id
 * @property string $name
 *
 * @property Language $language
 * @property Level $level
 */
class LevelTranslation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'level_translation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level_id', 'language_id', 'name'], 'required'],
            [['level_id', 'language_id'], 'integer'],
            [['name'], 'string', 'max' => 65],
            [['level_id', 'language_id'], 'unique', 'targetAttribute' => ['level_id', 'language_id']],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
            [['level_id'], 'exist', 'skipOnError' => true, 'targetClass' => Level::className(), 'targetAttribute' => ['level_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'level_id' => Yii::t('app', 'Level ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'name' => Yii::t('app', 'Name'),
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
    public function getLevel()
    {
        return $this->hasOne(Level::className(), ['id' => 'level_id']);
    }
}
