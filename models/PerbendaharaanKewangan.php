<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perbendaharaan_kewangan".
 *
 * @property int $bil
 * @property string|null $no_fail
 * @property string|null $nama_fail
 * @property string|null $catatan
 * @property string|null $nama_pemohon
 * @property string|null $kedudukan_ fail
 * @property string $tarikh_edaran
 * @property string|null $status
 */
class PerbendaharaanKewangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perbendaharaan_kewangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tarikh_edaran'], 'required'],
            [['tarikh_edaran'], 'safe'],
            [['no_fail'], 'string', 'max' => 200],
            [['nama_fail', 'catatan'], 'string', 'max' => 500],
            [['nama_pemohon', 'kedudukan_ fail', 'status'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bil' => 'Bil',
            'no_fail' => 'No Fail',
            'nama_fail' => 'Nama Fail',
            'catatan' => 'Catatan',
            'nama_pemohon' => 'Nama Pemohon',
            'kedudukan_ fail' => 'Kedudukan  Fail',
            'tarikh_edaran' => 'Tarikh Edaran',
            'status' => 'Status',
        ];
    }
}
