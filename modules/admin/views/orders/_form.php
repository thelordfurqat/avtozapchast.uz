<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'az_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Azinfo::find()->all(),'id','titile')) ?>
    <?php $model->count = 1;?>
    <?= $form->field($model, 'count')->textInput(['type'=>'number']) ?>

    <?= $form->field($model, 'price')->textInput(['disabled'=>'true']) ?>

    <?= $form->field($model, 'adress')->textarea(['rows'=>6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<?php



    $this->registerJs('$(document).ready(
            function() {
              $(\'#orders-az_id\').change(
                  function(){
                      $.get(\'/azinfo/getprice?id=\'+$(\'#orders-az_id\').val()).done(
                          function(data){
                              $(\'#orders-price\').val((data * parseInt($(\'#orders-count\').val())));
                          }
                      )
                  }
              )
            }
        );');


?>