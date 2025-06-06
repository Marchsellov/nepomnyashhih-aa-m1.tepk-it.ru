<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Partners $model */

$this->title = 'Update Partners: ' . $model->id_partner;
$this->params['breadcrumbs'][] = ['label' => 'Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_partner, 'url' => ['view', 'id_partner' => $model->id_partner]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="partners-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
