<?php

$this->title = "Avtozapchast.uz | Техническое обслуживание" ;

?>

<!--content-->
<div class="product" style="padding: 0">
    <div class="container">
        <div class="spec ">
            <h3>Техническое обслуживание</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class=" con-w3l">
            <?php foreach ($items as $item):?>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal<?=$item->alias?>" class="offer-img">
                            <img src="<?=Yii::$app->homeUrl.'web/image/'.$item->image ?>" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="<?=Yii::$app->urlManager->createUrl(['site/view','alias'=>$item->alias])?>"><?=substr($item->titile,0,40) ?>...</a></h6>
                            </div>
                            <div class="mid-2">
                                <p ><label></label><em class="item_price"><?=$item->price?> сум </em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add add-2">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?=$item->alias?>" data-name="<?=$item->titile?>" data-summary="summary 1" data-price="<?=$item->price?>" data-quantity="1" data-image="<?=Yii::$app->homeUrl.'web/image/'.$item->image ?>">Добавить в корзину</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- product -->
                <div class="modal fade" id="myModal<?=$item->alias?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-info">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                    <div class="item">
                                        <img src="<?=Yii::$app->homeUrl.'web/image/'.$item->image?>" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                    <h3><?=$item->titile?></h3>

                                    <div class="price_single">
                                        <span class="reducedfrom "><?=$item->price.' сум'?></span>

                                        <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Краткое описание:</h4>
                                    <p class="quick_desc"><?=$item->short?></p>
                                    <div class="add-to">
                                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="<?=$item->alias?>" data-name="<?=$item->titile?>" data-summary="summary <?=$item->alias?>" data-price="<?=$item->price ?>" data-quantity="1" data-image="<?=Yii::$app->homeUrl.'web/image/'.$item->image?>">Добавить в корзину</button>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product -->
            <?php endforeach;?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
