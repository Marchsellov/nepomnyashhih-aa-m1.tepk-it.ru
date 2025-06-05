<?php

use app\models\Partners;
use yii\helpers\Html;

/* @var $model Partners */
?>

<div class="card h-100">
    <div class="card-body position-relative"> <!-- Добавляем position-relative для позиционирования стоимости -->
        <!-- Блок стоимости в правом верхнем углу -->
        <div class="position-absolute top-0 end-0 p-3">

            <?= number_format($model->getTotalRequestsCost(), 2, '.', ' ') ?>

        </div>

        <!-- Основная информация -->
        <div class="d-flex flex-column">
            <!-- 1. Тип партнера | Наименование партнера -->
            <h5 class="card-title mb-1">
                <?= Html::encode($model->partnerType->partner_type_name ?? 'Тип не указан') ?> |
                <?= Html::encode($model->partner_company_name) ?>
            </h5>

            <!-- 2. Юридический адрес -->
            <div class="text-muted small mb-1">
                <?= Html::encode($model->adress) ?>
            </div>

            <!-- 3. Номер телефона -->
            <div class="mb-1">
                <?= Html::encode($model->phone_number ? '+7 ' . substr($model->phone_number, -20) : 'Телефон не указан') ?>
            </div>

            <!-- 4. Рейтинг -->
            <div class="d-flex align-items-center">
                <span class="me-1">Рейтинг:</span>

                <?= Html::encode($model->rating) ?>

            </div>
        </div>

        <!-- Кнопка просмотра внизу карточки -->
        <div class="mt-3 text-end">
            <?= Html::a('Просмотр', ['view', 'id_partner' => $model->id_partner], ['class' => 'btn btn-sm btn-outline-primary']) ?>
        </div>
    </div>
</div>
