<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php $form = ActiveForm::begin()?>
    <!--banner-->
    <div class="banner-top">
        <div class="container">
            <h3 >Login</h3>
            <h4><a href="#">Home</a><label>/</label>Login</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--login-->

    <div class="login">

        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Login</h3>
                <form action="#" method="post">
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class'=>'','onfocus'=>'this.value = \'\';', 'onblur'=>'if (this.value == \'\') {this.value = \'Email\';}'])->label(false) ?>



                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>


                        <?= $form->field($model, 'password')->passwordInput(['class'=>'', 'onfocus'=>'this.value = \'\';', 'onblur'=>'if (this.value == \'\') {this.value = \'Password\';}'])->label(false) ?>

                        <div class="clearfix"></div>
                    </div>
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </form>
            </div>

        </div>
    </div>

    <?php ActiveForm::end(); ?>


