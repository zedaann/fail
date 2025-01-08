<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jtm".
 *
 * @property int $bil
 * @property string|null $no_fail
 * @property string|null $no_fail_baru
 * @property string|null $nama_fail
 * @property string|null $catatan
 * @property string|null $tarikh_edaran
 * @property string|null $kedudukan_fail
 */
class Jtm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jtm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tarikh_edaran'], 'safe'],
            [['no_fail', 'no_fail_baru', 'nama_fail', 'kedudukan_fail'], 'string', 'max' => 200],
            [['catatan'], 'string', 'max' => 500],
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
            'no_fail_baru' => 'No Fail Baru',
            'nama_fail' => 'Nama Fail',
            'catatan' => 'Catatan',
            'tarikh_edaran' => 'Tarikh Edaran',
            'kedudukan_fail' => 'Kedudukan Fail',
        ];
    }
}
