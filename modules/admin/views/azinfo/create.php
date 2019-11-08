<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Azinfo */

$this->title = 'Create Azinfo';
$this->params['breadcrumbs'][] = ['label' => 'Azinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="azinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
