<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_category_translation".
 *
 * @property string $language_id
 * @property string $article_category_id
 * @property string $category_name
 *
 * @property ArticleCategory $articleCategory
 * @property Language $language
 */
class ArticleCategoryTranslation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_category_translation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_id', 'article_category_id', 'category_name'], 'required'],
            [['language_id', 'article_category_id'], 'integer'],
            [['category_name'], 'string', 'max' => 250],
            [['language_id', 'article_category_id'], 'unique', 'targetAttribute' => ['language_id', 'article_category_id']],
            [['article_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArticleCategory::className(), 'targetAttribute' => ['article_category_id' => 'id']],
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
            'article_category_id' => Yii::t('app', 'Article Category ID'),
            'category_name' => Yii::t('app', 'Category Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleCategory()
    {
        return $this->hasOne(ArticleCategory::className(), ['id' => 'article_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }
}
