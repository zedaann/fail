<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JabatanPenilaian;

/**
 * JabatanPenilaianSearch represents the model behind the search form of `app\models\JabatanPenilaian`.
 */
class JabatanPenilaianSearch extends JabatanPenilaian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Bil', 'imgid'], 'integer'],
            [['NO_AKAUN', 'NO_RUJUKAN', 'NO_PEMILIK', 'NAMA_PEMILIK', 'NOKP', 'ALAMAT_HARTA1', 'ALAMAT_HARTA2', 'ALAMAT_HARTA3', 'POSKOD_HARTA', 'ALAMAT_SURAT1', 'ALAMAT_SURAT2', 'ALAMAT_SURAT3', 'POSKOD_SURAT', 'NO_LOT', 'MUKIM', 'kod_fail', 'catatan', 'status', 'tarikh', 'lampiran', 'kedudukan_fail', 'jabatan', 'rak', 'sub_rak', 'tarikh_keluar', 'tarikh_hantar', 'catatan2', 'imgname', 'imgtype', 'imgsize', 'img'], 'safe'],
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
        $query = JabatanPenilaian::find();

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

        $query->andFilterWhere(['like', 'NO_AKAUN', $this->NO_AKAUN])
            ->andFilterWhere(['like', 'NO_RUJUKAN', $this->NO_RUJUKAN])
            ->andFilterWhere(['like', 'NO_PEMILIK', $this->NO_PEMILIK])
            ->andFilterWhere(['like', 'NAMA_PEMILIK', $this->NAMA_PEMILIK])
            ->andFilterWhere(['like', 'NOKP', $this->NOKP])
            ->andFilterWhere(['like', 'ALAMAT_HARTA1', $this->ALAMAT_HARTA1])
            ->andFilterWhere(['like', 'ALAMAT_HARTA2', $this->ALAMAT_HARTA2])
            ->andFilterWhere(['like', 'ALAMAT_HARTA3', $this->ALAMAT_HARTA3])
            ->andFilterWhere(['like', 'POSKOD_HARTA', $this->POSKOD_HARTA])
            ->andFilterWhere(['like', 'ALAMAT_SURAT1', $this->ALAMAT_SURAT1])
            ->andFilterWhere(['like', 'ALAMAT_SURAT2', $this->ALAMAT_SURAT2])
            ->andFilterWhere(['like', 'ALAMAT_SURAT3', $this->ALAMAT_SURAT3])
            ->andFilterWhere(['like', 'POSKOD_SURAT', $this->POSKOD_SURAT])
            ->andFilterWhere(['like', 'NO_LOT', $this->NO_LOT])
            ->andFilterWhere(['like', 'MUKIM', $this->MUKIM])
            ->andFilterWhere(['like', 'kod_fail', $this->kod_fail])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'lampiran', $this->lampiran])
            ->andFilterWhere(['like', 'kedudukan_fail', $this->kedudukan_fail])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'rak', $this->rak])
            ->andFilterWhere(['like', 'sub_rak', $this->sub_rak])
            ->andFilterWhere(['like', 'catatan2', $this->catatan2])
            ->andFilterWhere(['like', 'imgname', $this->imgname])
            ->andFilterWhere(['like', 'imgtype', $this->imgtype])
            ->andFilterWhere(['like', 'imgsize', $this->imgsize])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}
