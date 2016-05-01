<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\House;

/**
 * HouseSearch represents the model behind the search form about `app\models\House`.
 */
class HouseSearch extends House
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'price', 'houseArea', 'type', 'floor', 'fitment', 'county', 'community', 'address', 'owner', 'phone', 'pic1', 'pic2', 'pic3', 'pic4', 'pic5'], 'safe'],
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
        $query = House::find()->where(['userid'=>Yii::$app->user->identity->id]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'houseArea', $this->houseArea])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'floor', $this->floor])
            ->andFilterWhere(['like', 'fitment', $this->fitment])
            ->andFilterWhere(['like', 'county', $this->county])
            ->andFilterWhere(['like', 'community', $this->community])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'owner', $this->owner])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'pic1', $this->pic1])
            ->andFilterWhere(['like', 'pic2', $this->pic2])
            ->andFilterWhere(['like', 'pic3', $this->pic3])
            ->andFilterWhere(['like', 'pic4', $this->pic4])
            ->andFilterWhere(['like', 'pic5', $this->pic5]);

        return $dataProvider;
    }
}
