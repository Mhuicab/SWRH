<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RFC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CURP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechaNacimiento')->textInput() ?>

    <?= $form->field($model, 'nSeguro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipoSangr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enferCroni')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tutorResp')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
