<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment_translation".
 *
 * @property string $comment_id
 * @property string $language_id
 * @property string $name
 * @property string $comment
 *
 * @property Comment $comment0
 * @property Language $language
 */
class CommentTranslation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment_translation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment_id', 'language_id', 'name', 'comment'], 'required'],
            [['comment_id', 'language_id'], 'integer'],
            [['comment'], 'string'],
            [['name'], 'string', 'max' => 65],
            [['comment_id', 'language_id'], 'unique', 'targetAttribute' => ['comment_id', 'language_id']],
            [['comment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Comment::className(), 'targetAttribute' => ['comment_id' => 'id']],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => Yii::t('app', 'Comment ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'name' => Yii::t('app', 'Name'),
            'comment' => Yii::t('app', 'Comment'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComment()
    {
        return $this->hasOne(Comment::className(), ['id' => 'comment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }
}
