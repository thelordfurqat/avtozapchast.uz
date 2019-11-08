<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Azinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="azinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body')->textarea(['rows'=>6]) ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['type'=>'number']) ?>

    <?= $form->field($model, 'type_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Type::find()->all(), 'id','type')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
