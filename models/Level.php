<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "level".
 *
 * @property string $id
 *
 * @property Course[] $courses
 * @property LevelTranslation[] $levelTranslations
 * @property Language[] $languages
 */
class Level extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'level';
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
    public function getCourses()
    {
        return $this->hasMany(Course::className(), ['level_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLevelTranslations()
    {
        return $this->hasMany(LevelTranslation::className(), ['level_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguages()
    {
        return $this->hasMany(Language::className(), ['id' => 'language_id'])->viaTable('level_translation', ['level_id' => 'id']);
    }
}
