<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JabatanKejuruteraan;

/**
 * JabatanKejuruteraanSearch represents the model behind the search form of `app\models\JabatanKejuruteraan`.
 */
class JabatanKejuruteraanSearch extends JabatanKejuruteraan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Bil', 'imgid'], 'integer'],
            [['nama_fail', 'kod_fail', 'kakitangan', 'tajuk_projek', 'pemaju', 'no_id', 'no_lot', 'no_tel', 'catatan', 'status', 'tarikh', 'lampiran', 'kedudukan_fail', 'jabatan', 'rak', 'tarikh_keluar', 'tarikh_hantar', 'catatan2', 'imgname', 'imgtype', 'imgsize', 'img'], 'safe'],
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
        $query = JabatanKejuruteraan::find();

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
            'Bil' => $this->Bil,
            'tarikh' => $this->tarikh,
            'tarikh_keluar' => $this->tarikh_keluar,
            'tarikh_hantar' => $this->tarikh_hantar,
            'imgid' => $this->imgid,
        ]);

        $query->andFilterWhere(['like', 'nama_fail', $this->nama_fail])
            ->andFilterWhere(['like', 'kod_fail', $this->kod_fail])
            ->andFilterWhere(['like', 'kakitangan', $this->kakitangan])
            ->andFilterWhere(['like', 'tajuk_projek', $this->tajuk_projek])
            ->andFilterWhere(['like', 'pemaju', $this->pemaju])
            ->andFilterWhere(['like', 'no_id', $this->no_id])
            ->andFilterWhere(['like', 'no_lot', $this->no_lot])
            ->andFilterWhere(['like', 'no_tel', $this->no_tel])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'lampiran', $this->lampiran])
            ->andFilterWhere(['like', 'kedudukan_fail', $this->kedudukan_fail])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'rak', $this->rak])
            ->andFilterWhere(['like', 'catatan2', $this->catatan2])
            ->andFilterWhere(['like', 'imgname', $this->imgname])
            ->andFilterWhere(['like', 'imgtype', $this->imgtype])
            ->andFilterWhere(['like', 'imgsize', $this->imgsize])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}
