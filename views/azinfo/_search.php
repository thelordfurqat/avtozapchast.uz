<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AzinfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="azinfo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'titile') ?>

    <?= $form->field($model, 'short') ?>

    <?= $form->field($model, 'body') ?>

    <?= $form->field($model, 'alias') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'type_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
