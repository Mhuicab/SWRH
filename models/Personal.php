<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Personal".
 *
 * @property integer $idRegistro
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $celular
 * @property string $RFC
 * @property string $CURP
 * @property string $fechaNacimiento
 * @property string $nSeguro
 * @property string $tipoSangr
 * @property string $alergias
 * @property string $enferCroni
 * @property string $tutorResp
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fechaNacimiento'], 'safe'],
            [['nombre', 'direccion', 'alergias', 'enferCroni', 'tutorResp'], 'string', 'max' => 200],
            [['telefono'], 'string', 'max' => 7],
            [['celular'], 'string', 'max' => 10],
            [['RFC'], 'string', 'max' => 13],
            [['CURP'], 'string', 'max' => 18],
            [['nSeguro'], 'string', 'max' => 11],
            [['tipoSangr'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [

            'idRegistro' => 'Id Registro',
            'nombre' => yii::t('app','Nombres completos'),
            'direccion' => yii::t('app','Domicilio'),
            'telefono' => yii::t('app','Telefono de casa'),
            'celular' => yii::t('app','Celular'),
            'RFC' => yii::t('app','RFC'),
            'CURP' => yii::t('app','CURP'),
            'fechaNacimiento' => yii::t('app','Fecha de nacimiento'),
            'nSeguro' => yii::t('app','N° Seguro'),
            'tipoSangr' => yii::t('app','Tipo de Sangre'),
            'alergias' => yii::t('app','Alergias'),
            'enferCroni' => yii::t('app','Enfermedades Cronicas'),
            'tutorResp' => yii::t('app','Nombre del responsable'),
        ];
    }
}
