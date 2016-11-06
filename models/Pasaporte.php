<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasaporte".
 *
 * @property integer $idPasaporte
 * @property string $FM2
 * @property string $FM3
 */
class Pasaporte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pasaporte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPasaporte', 'FM2', 'FM3'], 'required'],
            [['idPasaporte'], 'integer'],
            [['FM2', 'FM3'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPasaporte' => 'Id Pasaporte',
            'FM2' => 'Fm2',
            'FM3' => 'Fm3',
        ];
    }
}
