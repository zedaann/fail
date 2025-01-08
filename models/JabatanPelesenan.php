<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jabatan_pelesenan".
 *
 * @property int $bil
 * @property string $no_fail
 * @property string $nama_fail
 * @property string|null $status
 * @property string $kedudukkan_fail
 * @property string|null $tarikh_edaran
 * @property string|null $jenis
 * @property string|null $catatan
 */
class JabatanPelesenan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan_pelesenan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_fail', 'kedudukkan_fail'], 'required'],
            [['tarikh_edaran'], 'safe'],
            [['no_fail', 'nama_fail'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 50],
            [['kedudukkan_fail', 'jenis', 'catatan'], 'string', 'max' => 200],
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
            'status' => 'Status',
            'kedudukkan_fail' => 'Kedudukkan Fail',
            'tarikh_edaran' => 'Tarikh Edaran',
            'jenis' => 'Jenis',
            'catatan' => 'Catatan',
        ];
    }
}
