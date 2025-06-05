<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PartnersType $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="partners-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'partner_type_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
