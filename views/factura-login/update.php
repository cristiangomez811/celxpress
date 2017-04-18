<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Factura_Login */

$this->title = 'Editar Factura ' . $model->NO_ORDEN;
$this->params['breadcrumbs'][] = ['label' => 'Factura ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NO_ORDEN, 'url' => ['view', 'id' => $model->NO_ORDEN]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="factura--login-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
