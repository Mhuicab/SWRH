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
            'idRegistro' => 'Id Registro',
            'nombre' => 'Nombre',
            'edad' => 'Edad',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'celular' => 'Celular',
            'RFC' => 'Rfc',
            'CURP' => 'Curp',
            'fechaNacimiento' => 'Fecha Nacimiento',
            'nSeguro' => 'N Seguro',
            'tipoSangr' => 'Tipo Sangr',
            'alergias' => 'Alergias',
            'enferCroni' => 'Enfer Croni',
            'tutorResp' => 'Tutor Resp',
            'correo' => 'Correo',
            'nacionalidad' => 'Nacionalidad',
            'lugarNacimiento' => 'Lugar Nacimiento',
            'estadoCivil' => 'Estado Civil',
            'extranjero' => 'Extranjero',
            'Pasaporte_idPasaporte' => 'Pasaporte Id Pasaporte',
        ];
    }
}
