<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property integer $idRegistro
 * @property string $nombre
 * @property string $edad
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
 * @property string $correo
 * @property string $nacionalidad
 * @property string $lugarNacimiento
 * @property string $estadoCivil
 * @property string $extranjero
 * @property integer $Pasaporte_idPasaporte
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'edad', 'direccion', 'telefono', 'celular', 'RFC', 'CURP', 'fechaNacimiento', 'nSeguro', 'tipoSangr', 'alergias', 'enferCroni', 'tutorResp', 'correo', 'lugarNacimiento', 'estadoCivil', 'extranjero', 'Pasaporte_idPasaporte'], 'required'],
            [['fechaNacimiento'], 'safe'],
            [['Pasaporte_idPasaporte'], 'integer'],
            [['nombre', 'direccion', 'alergias', 'enferCroni', 'tutorResp'], 'string', 'max' => 200],
            [['edad', 'tipoSangr', 'extranjero'], 'string', 'max' => 2],
            [['telefono'], 'string', 'max' => 7],
            [['celular'], 'string', 'max' => 10],
            [['RFC'], 'string', 'max' => 13],
            [['CURP'], 'string', 'max' => 18],
            [['nSeguro'], 'string', 'max' => 11],
            [['correo'], 'string', 'max' => 100],
            [['nacionalidad'], 'string', 'max' => 50],
            [['lugarNacimiento'], 'string', 'max' => 80],
            [['estadoCivil'], 'string', 'max' => 45],
            [['RFC'], 'unique'],
            [['CURP'], 'unique'],
            [['Pasaporte_idPasaporte'], 'exist', 'skipOnError' => true, 'targetClass' => Pasaporte::className(), 'targetAttribute' => ['Pasaporte_idPasaporte' => 'idPasaporte']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRegistro' => yii::t('app','idRegistro'),
            'nombre' => yii::t('app','Nombre Completo'),
            'edad' => yii::t('app','Edad'),
            'direccion' => yii::t('app','Domicilio'),
            'telefono' => yii::t('app','Telefono de casa'),
            'celular' => yii::t('app','Celular'),
            'RFC' => yii::t('app','RFC'),
            'CURP' => yii::t('app','CURP'),
            'fechaNacimiento' => yii::t('app','Fecha de nacimiento'),
            'nSeguro' => yii::t('app','Número de seguro'),
            'tipoSangr' => yii::t('app','Tipo de sangre'),
            'alergias' => yii::t('app','Alergias'),
            'enferCroni' => yii::t('app','¿Tiene alguna enfermedad Cronica?'),
            'tutorResp' => yii::t('app','Referencia en caso de accidentes'),
            'correo' => yii::t('app','Correo electronico'),
            'nacionalidad' => yii::t('app','Nacionalidad'),
            'lugarNacimiento' => yii::t('app','Lugar de nacimiento'),
            'estadoCivil' => yii::t('app','Estado civil'),
            'extranjero' => yii::t('app','¿Es extranjero?'),
            'Pasaporte_idPasaporte' => yii::t('app','¿Cuenta con pasaporte?'),
        ];
    }
}
