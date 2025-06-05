<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PartnersType $model */

$this->title = 'Update Partners Type: ' . $model->id_partner_type;
$this->params['breadcrumbs'][] = ['label' => 'Partners Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_partner_type, 'url' => ['view', 'id_partner_type' => $model->id_partner_type]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="partners-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
