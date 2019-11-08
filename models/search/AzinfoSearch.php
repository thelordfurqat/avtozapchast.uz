<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Azinfo;

/**
 * AzinfoSearch represents the model behind the search form about `app\models\Azinfo`.
 */
class AzinfoSearch extends Azinfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price', 'type_id'], 'integer'],
            [['titile', 'short', 'body', 'alias', 'image'], 'safe'],
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
        $query = Azinfo::find();

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
            'id' => $this->id,
            'price' => $this->price,
            'type_id' => $this->type_id,
        ]);

        $query->andFilterWhere(['like', 'titile', $this->titile])
            ->andFilterWhere(['like', 'short', $this->short])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
