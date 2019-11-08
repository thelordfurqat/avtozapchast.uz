<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AzinfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Azinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="azinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Azinfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titile',
            'short',
            'body:ntext',
            'alias',
            // 'image',
            // 'price',
            // 'type_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
