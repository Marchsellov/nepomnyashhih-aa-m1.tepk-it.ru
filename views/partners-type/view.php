<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\PartnersType $model */

$this->title = $model->id_partner_type;
$this->params['breadcrumbs'][] = ['label' => 'Partners Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="partners-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_partner_type' => $model->id_partner_type], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_partner_type' => $model->id_partner_type], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_partner_type',
            'partner_type_name',
        ],
    ]) ?>

</div>
