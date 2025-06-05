<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\PartnerProductsRequest $model */

$this->title = $model->id_partner_products_request;
$this->params['breadcrumbs'][] = ['label' => 'Partner Products Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="partner-products-request-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id_partner_products_request' => $model->id_partner_products_request], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id_partner_products_request' => $model->id_partner_products_request], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно хотите удалить эту заявку?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_partner_products_request',
            [
                'attribute' => 'product_id',
                'value' => $model->product ? $model->product->products_name : 'Не указано',
                'label' => 'Название товара',
            ],
            [
                'attribute' => 'partner_id',
                'value' => $model->partner ? $model->partner->partner_company_name : 'Не указано',
                'label' => 'Партнер',
            ],
            [
                'attribute' => 'products_quantity',
                'label' => 'Количество продуктов',
            ],
        ],
    ]) ?>


</div>
