<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CourseTranslation;

/**
 * CourseTranslationSearch represents the model behind the search form of `app\models\CourseTranslation`.
 */
class CourseTranslationSearch extends CourseTranslation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_id', 'course_id'], 'integer'],
            [['course_name', 'course_description', 'course_period', 'course_level'], 'safe'],
            [['course_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = CourseTranslation::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'language_id' => $this->language_id,
            'course_id' => $this->course_id,
            'course_price' => $this->course_price,
        ]);

        $query->andFilterWhere(['like', 'course_name', $this->course_name])
            ->andFilterWhere(['like', 'course_description', $this->course_description])
            ->andFilterWhere(['like', 'course_period', $this->course_period])
            ->andFilterWhere(['like', 'course_level', $this->course_level]);

        return $dataProvider;
    }
}
