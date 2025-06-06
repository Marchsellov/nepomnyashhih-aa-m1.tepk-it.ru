<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MaterialType $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="material-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'material_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'percentage_of_marriage')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
