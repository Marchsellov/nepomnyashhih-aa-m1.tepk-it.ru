<?php

use app\models\PartnerProductsRequest;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PartnerProductsRequestSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заявки партнеров';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partner-products-request-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать заявку партнера на продукты', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id_partner_products_request',
            [
                'attribute' => 'product_id',
                'value' => 'product.products_name',
                'label' => 'Наименование продукта'
            ],
            [
                'attribute' => 'partner_id',
                'value' => 'partner.partner_company_name',
                'label' => 'Имя Партнера'
            ],


            [
                'attribute' => 'products_quantity',
                'label' => 'Количество продуктов',
            ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PartnerProductsRequest $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_partner_products_request' => $model->id_partner_products_request]);
                }
            ],
        ],
    ]); ?>



</div>
