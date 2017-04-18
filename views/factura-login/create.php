<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Factura_Login */

$this->title = 'Crear Factura';
$this->params['breadcrumbs'][] = ['label' => 'Factura', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factura--login-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
