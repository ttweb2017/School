<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_translation".
 *
 * @property string $language_id
 * @property string $article_id
 * @property string $title
 * @property string $body
 *
 * @property Article $article
 * @property Language $language
 */
class ArticleTranslation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_translation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_id', 'article_id', 'title', 'body'], 'required'],
            [['language_id', 'article_id'], 'integer'],
            [['body'], 'string'],
            [['title'], 'string', 'max' => 250],
            [['language_id', 'article_id'], 'unique', 'targetAttribute' => ['language_id', 'article_id']],
            [['article_id'], 'exist', 'skipOnError' => true, 'targetClass' => Article::className(), 'targetAttribute' => ['article_id' => 'id']],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'language_id' => Yii::t('app', 'Language ID'),
            'article_id' => Yii::t('app', 'Article ID'),
            'title' => Yii::t('app', 'Title'),
            'body' => Yii::t('app', 'Body'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {
        return $this->hasOne(Article::className(), ['id' => 'article_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }
}
