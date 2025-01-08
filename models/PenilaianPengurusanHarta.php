<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penilaian_pengurusan_harta".
 *
 * @property int $Bil
 * @property string $nama_fail
 * @property string $kod_fail
 * @property string $kakitangan
 * @property string $pemilik
 * @property string $penyewa
 * @property string $no_lot
 * @property string $no_tel
 * @property string $catatan
 * @property string $status
 * @property string $tarikh
 * @property string $lampiran
 * @property string $kedudukan_fail
 * @property string $jabatan
 * @property string $rak
 * @property string $tarikh_keluar
 * @property string $tarikh_hantar
 * @property string $catatan2
 * @property int $imgid
 * @property string $imgname
 * @property string $imgtype
 * @property string $imgsize
 * @property resource $img
 */
class PenilaianPengurusanHarta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_pengurusan_harta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_fail', 'kod_fail', 'kakitangan', 'pemilik', 'penyewa', 'no_lot', 'catatan', 'kedudukan_fail', 'jabatan', 'rak', 'catatan2', 'img'], 'required'],
            [['tarikh', 'tarikh_keluar', 'tarikh_hantar'], 'safe'],
            [['imgid'], 'integer'],
            [['img'], 'string'],
            [['nama_fail', 'kod_fail', 'pemilik', 'penyewa', 'catatan', 'kedudukan_fail', 'jabatan', 'catatan2'], 'string', 'max' => 100],
            [['kakitangan'], 'string', 'max' => 70],
            [['no_lot', 'rak'], 'string', 'max' => 50],
            [['no_tel', 'status', 'lampiran', 'imgname', 'imgtype', 'imgsize'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Bil' => 'Bil',
            'nama_fail' => 'Nama Fail',
            'kod_fail' => 'Kod Fail',
            'kakitangan' => 'Kakitangan',
            'pemilik' => 'Pemilik',
            'penyewa' => 'Penyewa',
            'no_lot' => 'No Lot',
            'no_tel' => 'No Tel',
            'catatan' => 'Catatan',
            'status' => 'Status',
            'tarikh' => 'Tarikh',
            'lampiran' => 'Lampiran',
            'kedudukan_fail' => 'Kedudukan Fail',
            'jabatan' => 'Jabatan',
            'rak' => 'Rak',
            'tarikh_keluar' => 'Tarikh Keluar',
            'tarikh_hantar' => 'Tarikh Hantar',
            'catatan2' => 'Catatan2',
            'imgid' => 'Imgid',
            'imgname' => 'Imgname',
            'imgtype' => 'Imgtype',
            'imgsize' => 'Imgsize',
            'img' => 'Img',
        ];
    }
}
