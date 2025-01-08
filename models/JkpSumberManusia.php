<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jkp_sumber_manusia".
 *
 * @property int $bil
 * @property string|null $no_fail
 * @property string|null $nama_fail
 * @property string|null $catatan
 * @property string|null $tarikh_edaran
 * @property string|null $kedudukan_fail
 */
class JkpSumberManusia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jkp_sumber_manusia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tarikh_edaran'], 'safe'],
            [['no_fail', 'nama_fail', 'kedudukan_fail'], 'string', 'max' => 200],
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
            'nama_fail' => 'Nama Fail',
            'catatan' => 'Catatan',
            'tarikh_edaran' => 'Tarikh Edaran',
            'kedudukan_fail' => 'Kedudukan Fail',
        ];
    }
}
