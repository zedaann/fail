<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jkas_kesihatan_awam".
 *
 * @property int $bil
 * @property string $no_fail
 * @property string|null $nama_fail
 * @property string|null $kedudukan_fail
 * @property string|null $tarikh_edaran
 * @property string|null $status
 * @property string|null $catatan
 */
class JkasKesihatanAwam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jkas_kesihatan_awam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_fail'], 'required'],
            [['tarikh_edaran'], 'safe'],
            [['no_fail', 'nama_fail', 'kedudukan_fail', 'status'], 'string', 'max' => 200],
            [['catatan'], 'string', 'max' => 400],
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
            'kedudukan_fail' => 'Kedudukan Fail',
            'tarikh_edaran' => 'Tarikh Edaran',
            'status' => 'Status',
            'catatan' => 'Catatan',
        ];
    }
}
