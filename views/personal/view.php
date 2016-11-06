<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */
?>
<div class="personal-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idRegistro',
            'nombre',
            'edad',
            'direccion',
            'telefono',
            'celular',
            'RFC',
            'CURP',
            'fechaNacimiento',
            'nSeguro',
            'tipoSangr',
            'alergias',
            'enferCroni',
            'tutorResp',
            'correo',
            'nacionalidad',
            'lugarNacimiento',
            'estadoCivil',
            'extranjero',
            'Pasaporte_idPasaporte',
        ],
    ]) ?>

</div>
