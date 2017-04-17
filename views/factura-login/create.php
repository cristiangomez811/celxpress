<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Factura_Login */

$this->title = 'Create Factura  Login';
$this->params['breadcrumbs'][] = ['label' => 'Factura  Logins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factura--login-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
