<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Factura_Login */

$this->title = $model->NO_ORDEN;
$this->params['breadcrumbs'][] = ['label' => 'Facturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factura--login-view">

    <h1>factura: <?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->NO_ORDEN], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->NO_ORDEN], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Esta seguro de eliminar esta factura?',
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
