<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Student;

/**
 * StudentSearch represents the model behind the search form of `frontend\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['st_id', 'class_id'], 'integer'],
            [['st_name', 'st_lname', 'st_code', 'st_contact', 'st_address', 'st_school', 'st_img'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Student::find();

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
            'st_id' => $this->st_id,
            'class_id' => $this->class_id,
        ]);

        $query->andFilterWhere(['ilike', 'st_name', $this->st_name])
            ->andFilterWhere(['ilike', 'st_lname', $this->st_lname])
            ->andFilterWhere(['ilike', 'st_code', $this->st_code])
            ->andFilterWhere(['ilike', 'st_contact', $this->st_contact])
            ->andFilterWhere(['ilike', 'st_address', $this->st_address])
            ->andFilterWhere(['ilike', 'st_school', $this->st_school])
            ->andFilterWhere(['ilike', 'st_img', $this->st_img]);

        return $dataProvider;
    }
}
