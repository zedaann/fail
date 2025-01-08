<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perbendaharaan_perolehan".
 *
 * @property int $bil
 * @property string|null $no_fail
 * @property string|null $nama_fail
 * @property string|null $catatan
 * @property string|null $nama_pemohon
 * @property string|null $kedudukan_ fail
 * @property string|null $tarikh_edaran
 * @property string|null $status
 */
class PerbendaharaanPerolehan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perbendaharaan_perolehan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tarikh_edaran'], 'safe'],
            [['no_fail', 'nama_pemohon', 'status'], 'string', 'max' => 200],
            [['nama_fail', 'catatan', 'kedudukan_ fail'], 'string', 'max' => 500],
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
