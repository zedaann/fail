<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JabatanPelesenan;

/**
 * JabatanPelesenanSearch represents the model behind the search form of `app\models\JabatanPelesenan`.
 */
class JabatanPelesenanSearch extends JabatanPelesenan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bil'], 'integer'],
            [['no_fail', 'nama_fail', 'status', 'kedudukkan_fail', 'tarikh_edaran', 'jenis', 'catatan'], 'safe'],
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
        $query = JabatanPelesenan::find();

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
            'bil' => $this->bil,
            'tarikh_edaran' => $this->tarikh_edaran,
        ]);

        $query->andFilterWhere(['like', 'no_fail', $this->no_fail])
            ->andFilterWhere(['like', 'nama_fail', $this->nama_fail])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'kedudukkan_fail', $this->kedudukkan_fail])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'catatan', $this->catatan]);

        return $dataProvider;
    }
}
