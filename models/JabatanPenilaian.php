<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jabatan_penilaian".
 *
 * @property int $Bil
 * @property string $NO_AKAUN
 * @property string $NO_RUJUKAN
 * @property string $NO_PEMILIK
 * @property string $NAMA_PEMILIK
 * @property string $NOKP
 * @property string $ALAMAT_HARTA1
 * @property string $ALAMAT_HARTA2
 * @property string $ALAMAT_HARTA3
 * @property string $POSKOD_HARTA
 * @property string $ALAMAT_SURAT1
 * @property string $ALAMAT_SURAT2
 * @property string $ALAMAT_SURAT3
 * @property string $POSKOD_SURAT
 * @property string $NO_LOT
 * @property string|null $MUKIM
 * @property string|null $kod_fail
 * @property string $catatan
 * @property string $status
 * @property string $tarikh
 * @property string $lampiran
 * @property string $kedudukan_fail
 * @property string $jabatan
 * @property string $rak
 * @property string $sub_rak
 * @property string $tarikh_keluar
 * @property string $tarikh_hantar
 * @property string $catatan2
 * @property int $imgid
 * @property string $imgname
 * @property string $imgtype
 * @property string $imgsize
 * @property resource $img
 */
class JabatanPenilaian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan_penilaian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NO_AKAUN', 'NO_RUJUKAN', 'NO_PEMILIK', 'NAMA_PEMILIK', 'NOKP', 'ALAMAT_HARTA1', 'ALAMAT_HARTA2', 'ALAMAT_HARTA3', 'POSKOD_HARTA', 'ALAMAT_SURAT1', 'ALAMAT_SURAT2', 'ALAMAT_SURAT3', 'POSKOD_SURAT', 'NO_LOT', 'catatan', 'kedudukan_fail', 'jabatan', 'rak', 'sub_rak', 'catatan2', 'img'], 'required'],
            [['ALAMAT_HARTA1', 'ALAMAT_HARTA2', 'ALAMAT_HARTA3', 'ALAMAT_SURAT1', 'ALAMAT_SURAT2', 'ALAMAT_SURAT3', 'img'], 'string'],
            [['tarikh', 'tarikh_keluar', 'tarikh_hantar'], 'safe'],
            [['imgid'], 'integer'],
            [['NO_AKAUN', 'NO_PEMILIK', 'NAMA_PEMILIK', 'POSKOD_HARTA', 'POSKOD_SURAT', 'NO_LOT', 'MUKIM', 'kod_fail'], 'string', 'max' => 200],
            [['NO_RUJUKAN', 'NOKP', 'catatan', 'kedudukan_fail', 'jabatan', 'sub_rak', 'catatan2'], 'string', 'max' => 100],
            [['status', 'lampiran', 'imgname', 'imgtype', 'imgsize'], 'string', 'max' => 20],
            [['rak'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Bil' => 'Bil',
            'NO_AKAUN' => 'No Akaun',
            'NO_RUJUKAN' => 'No Rujukan',
            'NO_PEMILIK' => 'No Pemilik',
            'NAMA_PEMILIK' => 'Nama Pemilik',
            'NOKP' => 'Nokp',
            'ALAMAT_HARTA1' => 'Alamat Harta1',
            'ALAMAT_HARTA2' => 'Alamat Harta2',
            'ALAMAT_HARTA3' => 'Alamat Harta3',
            'POSKOD_HARTA' => 'Poskod Harta',
            'ALAMAT_SURAT1' => 'Alamat Surat1',
            'ALAMAT_SURAT2' => 'Alamat Surat2',
            'ALAMAT_SURAT3' => 'Alamat Surat3',
            'POSKOD_SURAT' => 'Poskod Surat',
            'NO_LOT' => 'No Lot',
            'MUKIM' => 'Mukim',
            'kod_fail' => 'Kod Fail',
            'catatan' => 'Catatan',
            'status' => 'Status',
            'tarikh' => 'Tarikh',
            'lampiran' => 'Lampiran',
            'kedudukan_fail' => 'Kedudukan Fail',
            'jabatan' => 'Jabatan',
            'rak' => 'Rak',
            'sub_rak' => 'Sub Rak',
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
