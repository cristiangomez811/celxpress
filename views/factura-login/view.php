<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Factura_Login */

$this->title = $model->NO_ORDEN;
$this->params['breadcrumbs'][] = ['label' => 'Factura  Logins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factura--login-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->NO_ORDEN], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->NO_ORDEN], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'NO_ORDEN',
            'CC',
            'NOMBRE',
            'TELEFONO_UNO',
            'TELEFONO_DOS',
            'FECHA',
            'ESTADO',
            'PROCESO:ntext',
            'VALOR',
            'IMEI',
            'MARCA_MODELO:ntext',
        ],
    ]) ?>

</div>
