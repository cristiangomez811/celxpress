<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Factura_Login */

$this->title = 'Update Factura  Login: ' . $model->NO_ORDEN;
$this->params['breadcrumbs'][] = ['label' => 'Factura  Logins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NO_ORDEN, 'url' => ['view', 'id' => $model->NO_ORDEN]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="factura--login-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
