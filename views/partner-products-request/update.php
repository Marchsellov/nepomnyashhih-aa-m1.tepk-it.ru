<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PartnerProductsRequest $model */

$this->title = 'Update Partner Products Request: ' . $model->id_partner_products_request;
$this->params['breadcrumbs'][] = ['label' => 'Partner Products Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_partner_products_request, 'url' => ['view', 'id_partner_products_request' => $model->id_partner_products_request]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="partner-products-request-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
