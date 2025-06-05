<?php

use app\models\PartnersType;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PartnersTypeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Partners Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Partners Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_partner_type',
            'partner_type_name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PartnersType $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_partner_type' => $model->id_partner_type]);
                 }
            ],
        ],
    ]); ?>


</div>
