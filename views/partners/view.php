<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Partners $model */

$this->title = $model->id_partner;
$this->params['breadcrumbs'][] = ['label' => 'Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="partners-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id_partner' => $model->id_partner], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id_partner' => $model->id_partner], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно хотите удалить эту заявку?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_partner',
            [
                'attribute' => 'partner_type_id',
                'value' => 'partnerType.partner_type_name',
                'label' => 'Тип партнера',
            ],
            [
                'attribute' => 'partner_director_name',
                'label' => 'Наименование партнера',
            ],
            [
                'attribute' => 'partner_director_name',
                'label' => 'Имя директора',
            ],
            [
                'attribute' => 'email',
                'label' => 'Email',
            ],
            [
                'attribute' => 'phone_number',
                'label' => 'Номер телефона',
            ],
            [
                'attribute' => 'adress',
                'label' => 'Юридический адресс',
            ],
            [
                'attribute' => 'inn',
                'label' => 'ИНН',
            ],
            [
                'attribute' => 'rating',
                'label' => 'Рейтинг',
            ],
        ],
    ]) ?>

</div>
