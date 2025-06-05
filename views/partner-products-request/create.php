<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PartnerProductsRequest $model */

$this->title = 'Create Partner Products Request';
$this->params['breadcrumbs'][] = ['label' => 'Partner Products Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partner-products-request-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
