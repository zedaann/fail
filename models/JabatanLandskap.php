<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jabatan_landskap".
 *
 * @property int $Bil
 * @property string|null $nama_fail
 * @property string|null $kod_fail
 * @property string|null $kakitangan
 * @property string|null $tajuk_projek
 * @property string|null $pemaju
 * @property string|null $no_tel
 * @property string|null $catatan
 * @property string|null $status
 * @property string|null $tarikh
 * @property string|null $lampiran
 * @property string|null $kedudukan_fail
 * @property string|null $jabatan
 * @property string|null $rak
 * @property string|null $tarikh_keluar
 * @property string|null $tarikh_hantar
 * @property string|null $catatan2
 * @property int|null $imgid
 * @property string|null $imgname
 * @property string|null $imgtype
 * @property string|null $imgsize
 * @property resource|null $img
 */
class JabatanLandskap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan_landskap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tarikh', 'tarikh_keluar', 'tarikh_hantar'], 'safe'],
            [['imgid'], 'integer'],
            [['img'], 'string'],
            [['nama_fail', 'kakitangan', 'pemaju', 'jabatan'], 'string', 'max' => 40],
            [['kod_fail', 'no_tel', 'status', 'lampiran', 'rak', 'imgname', 'imgtype', 'imgsize'], 'string', 'max' => 20],
            [['tajuk_projek'], 'string', 'max' => 300],
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
