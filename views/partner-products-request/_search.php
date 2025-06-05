<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PartnerProductsRequestSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="partner-products-request-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_partner_products_request') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'partner_id') ?>

    <?= $form->field($model, 'products_quantity') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
