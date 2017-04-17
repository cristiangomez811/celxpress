<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Factura_Login */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="factura--login-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CC')->textInput() ?>

    <?= $form->field($model, 'NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEFONO_UNO')->textInput() ?>

    <?= $form->field($model, 'TELEFONO_DOS')->textInput() ?>

    <?= $form->field($model, 'FECHA')->textInput() ?>

    <?= $form->field($model, 'ESTADO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PROCESO')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'VALOR')->textInput() ?>

    <?= $form->field($model, 'IMEI')->textInput() ?>

    <?= $form->field($model, 'MARCA_MODELO')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
