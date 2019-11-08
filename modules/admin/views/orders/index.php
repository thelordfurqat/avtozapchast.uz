<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'phone',
//            'email:email',
//            'az_id',
            [
                'attribute'=>'az_id',
                'value'=>function($x){return $x->az->titile; },
                'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Azinfo::find()->all(),'id','titile'),
            ],
            'count',
             'price',
//             'adress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
