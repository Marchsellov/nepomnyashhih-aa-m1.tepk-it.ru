<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PartnersType $model */

$this->title = 'Create Partners Type';
$this->params['breadcrumbs'][] = ['label' => 'Partners Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
