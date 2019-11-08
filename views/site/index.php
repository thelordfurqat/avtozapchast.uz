<?php

$this->title = "Avtozapchast.uz | index" ;

?>

<!-- Carousel
  ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="<?=Yii::$app->homeUrl?>site/oils"> <img class="first-slide" src="<?=Yii::$app->homeUrl?>web/image/carusel0.jpg" alt="First slide"></a>

        </div>
        <div class="item">
            <a href="<?=Yii::$app->homeUrl?>site/dvigatel"> <img class="second-slide " src="<?=Yii::$app->homeUrl?>web/image/carusel1.jpg" alt="Second slide"></a>

        </div>
        <div class="item">
            <a href="<?=Yii::$app->homeUrl?>site/qismlar"><img class="third-slide " src="<?=Yii::$app->homeUrl?>web/image/carusel2.jpg" alt="Third slide"></a>

        </div>
    </div>

</div><!-- /.carousel -->


<!--content-->
<div class="content-top ">
    <div class="container ">
        <div class="spec ">
            <h3>Cпециальние предложения</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class="tab-head ">
            <nav class="nav-sidebar">
                <ul class="nav tabs ">
                    <?php $n = 0; foreach ($type as $item): $n++;?>
                    <li class="<?=$n == 1 ? "active" : ""?>"><a href="#tab<?=$n?>" data-toggle="tab"><?=$item->type?></a></li>
                    <?php endforeach;?>
                </ul>
            </nav>
            <div class=" tab-content tab-content-t ">
                <div class="tab-pane active text-style" id="tab1">
                    <div class=" con-w3l">
                        <?php foreach ($type1 as $item):?>
                            <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal<?=$item->alias?>" class="offer-img">
                                    <img src="<?=Yii::$app->homeUrl.'web/image/'.$item->image ?>" class="img-responsive" alt="">
                                    <div class="offer"><p><span><?=$item->type->type?></span></p></div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="<?=Yii::$app->urlManager->createUrl(['site/view','alias'=>$item->alias])?>"><?=$item->titile?></a></h6>
                                    </div>
                                    <div class="mid-2">
                                        <p ><label></label><em class="item_price"><?=$item->price?></em> Сум </p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?=$item->alias?>" data-name="<?=$item->titile?>" data-summary="summary 1" data-price="<?=$item->price?>" data-quantity="1" data-image="<?=Yii::$app->homeUrl.'web/image/'.$item->image?>">Добавить в корзину</button>
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
                <div class="tab-pane  text-style" id="tab2">
                    <div class=" con-w3l">
                        <?php foreach ($type2 as $item):?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal<?=$item->alias?>" class="offer-img">
                                        <img src="<?=Yii::$app->homeUrl.'web/image/'.$item->image ?>" class="img-responsive" alt="">
                                        <div class="offer"><p><span><?=$item->type->type?></span></p></div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="<?=Yii::$app->urlManager->createUrl(['site/view','alias'=>$item->alias])?>"><?=$item->titile?></a></h6>
                                        </div>
                                        <div class="mid-2">
                                            <p ><label></label><em class="item_price"><?=$item->price?></em> Сум </p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?=$item->alias?>" data-name="<?=$item->titile?>" data-summary="summary 1" data-price="<?=$item->price?>" data-quantity="1" data-image="<?=Yii::$app->homeUrl.'web/image/'.$item->image?>">Добавить в корзину</button>

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
                <div class="tab-pane  text-style" id="tab3">
                    <div class=" con-w3l">
                        <?php foreach ($type3 as $item):?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal<?=$item->alias?>" class="offer-img">
                                        <img src="<?=Yii::$app->homeUrl.'web/image/'.$item->image ?>" class="img-responsive" alt="">
                                        <div class="offer"><p><span><?=$item->type->type?></span></p></div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="<?=Yii::$app->urlManager->createUrl(['site/view','alias'=>$item->alias])?>"><?=$item->titile?></a></h6>
                                        </div>
                                        <div class="mid-2">
                                            <p ><label></label><em class="item_price"><?=$item->price?> Cум</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?=$item->alias?>" data-name="<?=$item->titile?>" data-summary="summary 1" data-price="<?=$item->price?>" data-quantity="1" data-image="<?=Yii::$app->homeUrl.'web/image/'.$item->image?>">Добавить в корзину</button>
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
                <div class="tab-pane text-style" id="tab4">
                    <div class=" con-w3l">
                        <?php foreach ($type4 as $item):?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal<?=$item->alias?>" class="offer-img">
                                        <img src="<?=Yii::$app->homeUrl.'web/image/'.$item->image ?>" class="img-responsive" alt="">
                                        <div class="offer"><p><span><?=$item->type->type?></span></p></div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="<?=Yii::$app->urlManager->createUrl(['site/view','alias'=>$item->alias])?>"><?=$item->titile?></a></h6>
                                        </div>
                                        <div class="mid-2">
                                            <p ><label></label><em class="item_price"><?=$item->price?> Сум</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?=$item->alias?>" data-name="<?=$item->titile?>" data-summary="summary 1" data-price="<?=$item->price?>" data-quantity="1" data-image="<?=Yii::$app->homeUrl.'web/image/'.$item->image?>">Добавить в корзину</button>
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
        </div>

    </div>
</div>

<!--content-->
<div class="content-mid">
    <div class="container">

        <div class="col-md-4 m-w3ls">
            <div class="col-md1 ">
                <a href="<?=Yii::$app->homeUrl?>site/qismlar">
                    <img src="<?=Yii::$app->homeUrl?>web/theme/images/co1.jpg" class="img-responsive img" alt="">
                    <div class="big-sa">
                        <h6></h6>
                        <h3 style="color: red">Автозапчасти</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 m-w3ls1">
            <div class="col-md ">
                <a href="<?=Yii::$app->homeUrl?>site/akkumlyator">
                    <img src="<?=Yii::$app->homeUrl?>web/theme/images/co.jpg" class="img-responsive img" alt="">
                    <div class="big-sale">
                        <div class="big-sale1" >
                            <h3 style="color: white; font-size: 300%">Аккумуляторы</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 m-w3ls">
            <div class="col-md2 ">
                <a href="<?=Yii::$app->homeUrl?>site/dvigatel">
                    <img src="<?=Yii::$app->homeUrl?>web/theme/images/co2.jpg" class="img-responsive img1" alt="">
                    <div class="big-sale2">
                        <h3 style="color: red">Двигатель</h3>
                    </div>
                </a>
            </div>
            <div class="col-md3 ">
                <a href="<?=Yii::$app->homeUrl?>site/oils">
                    <img src="<?=Yii::$app->homeUrl?>web/theme/images/co3.jpg" class="img-responsive img1" alt="">
                    <div class="big-sale3">
                        <h3>Масла</h3>
                        <p></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--content-->

<!--content-->
<div class="product" style="padding: 0">
    <div class="container">
        <div class="spec ">
            <h3>Самые последние товары</h3>
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
