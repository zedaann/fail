<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jabatan_kejuruteraan".
 *
 * @property int $Bil
 * @property string $nama_fail
 * @property string $kod_fail
 * @property string $kakitangan
 * @property string $tajuk_projek
 * @property string|null $pemaju
 * @property string|null $no_id
 * @property string|null $no_lot
 * @property string|null $no_tel
 * @property string|null $catatan
 * @property string $status
 * @property string|null $tarikh
 * @property string $lampiran
 * @property string $kedudukan_fail
 * @property string $jabatan
 * @property string $rak
 * @property string|null $tarikh_keluar
 * @property string $tarikh_hantar
 * @property string|null $catatan2
 * @property int $imgid
 * @property string $imgname
 * @property string $imgtype
 * @property string $imgsize
 * @property resource $img
 */
class JabatanKejuruteraan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan_kejuruteraan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_fail', 'tajuk_projek', 'img'], 'required'],
            [['tarikh', 'tarikh_keluar', 'tarikh_hantar'], 'safe'],
            [['imgid'], 'integer'],
            [['img'], 'string'],
            [['nama_fail', 'tajuk_projek'], 'string', 'max' => 200],
            [['kod_fail', 'no_tel', 'status', 'lampiran', 'rak', 'imgname', 'imgtype', 'imgsize'], 'string', 'max' => 20],
            [['kakitangan', 'pemaju', 'jabatan'], 'string', 'max' => 40],
            [['no_id', 'no_lot'], 'string', 'max' => 50],
            [['catatan'], 'string', 'max' => 60],
            [['kedudukan_fail', 'catatan2'], 'string', 'max' => 30],
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
            'tajuk_projek' => 'Tajuk Projek',
            'pemaju' => 'Pemaju',
            'no_id' => 'No ID',
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
