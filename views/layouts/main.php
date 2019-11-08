<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\FrontAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href="<?=Yii::$app->homeUrl?>web/theme/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="<?=Yii::$app->homeUrl?>web/theme/css/style.css" rel='stylesheet' type='text/css' />

    <script src="<?=Yii::$app->homeUrl?>web/theme/js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="<?=Yii::$app->homeUrl?>web/theme/js/move-top.js"></script>
    <script type="text/javascript" src="<?=Yii::$app->homeUrl?>web/theme/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>


    <!-- start-smoth-scrolling -->
    <link href="<?=Yii::$app->homeUrl?>web/theme/css/font-awesome.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--- start-rate---->
    <script src="<?=Yii::$app->homeUrl?>web/theme/js/jstarbox.js"></script>
    <link rel="stylesheet" href="<?=Yii::$app->homeUrl?>web/theme/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
        jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' '+val);
                        return val;
                    }
                })
            });
        });
    </script>
    <!---//End-rate---->


    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="header" style="margin-top: 0">

    <div class="container">

        <div class="logo">
            <h1 ><a href="<?=Yii::$app->homeUrl?>">Автозапчасти</span></a></h1>
        </div>

        <div class="nav-top">
            <nav class="navbar navbar-default">

                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav ">
                        <li class=" <?=Yii::$app->controller->action->id == 'index' ? "active" : ''?>"><a href="<?=Yii::$app->homeUrl?>" class="hyper "><span>Главная</span></a></li>
                        <li  class="<?=Yii::$app->controller->action->id == 'oils' ? "active" : ''?>"><a href="<?=Yii::$app->urlManager->createUrl(['site/oils'])?>" class="hyper"> <span>Масла</span></a></li>
                        <li class="<?=Yii::$app->controller->action->id == 'filters' ? "active" : ''?>"><a href="<?=Yii::$app->urlManager->createUrl(['site/filters'])?>" class="hyper"> <span>Фильтры</span></a></li>
                        <li class="<?=Yii::$app->controller->action->id == 'qismlar' ? "active" : ''?>"><a href="<?=Yii::$app->urlManager->createUrl(['site/qismlar'])?>" class="hyper"> <span>Автозапчасти</span></a></li>
                        <li class="<?=Yii::$app->controller->action->id == 'texobs' ? "active" : ''?>"><a href="<?=Yii::$app->urlManager->createUrl(['site/texobs'])?>" class="hyper"> <span>Техническое обслуживание</span></a></li>
                        <li class="<?=Yii::$app->controller->action->id == 'akkumlyator' ? "active" : ''?>"><a href="<?=Yii::$app->urlManager->createUrl(['site/akkumlyator'])?>" class="hyper"> <span>Аккумуляторы</span></a></li>
                        <li class="<?=Yii::$app->controller->action->id == 'dvigatel' ? "active" : ''?>"><a href="<?=Yii::$app->urlManager->createUrl(['site/dvigatel'])?>"class="hyper"> <span>Двигатель</span></a></li>
                        <li class="<?=Yii::$app->controller->action->id == 'contactus' ? "active" : ''?>"><a href="<?=Yii::$app->urlManager->createUrl(['site/contactus'])?>"class="hyper"><span>Contact Us</span></a></li>
                    </ul>
                </div>
            </nav>
            <div class="cart" >
                <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>


<script>window.jQuery || document.write('<script src="<?=Yii::$app->homeUrl?>web/theme/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

<?=$content?>

<!--footer-->
<div class="footer" style="padding: 0">
    <div class="container">

        <div class="footer-bottom">
            <h2 ><a href="<?=Yii::$app->homeUrl?>">Автозапчасти</span></a></h2>
             <ul class="social-fo">
                <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            </ul>
            <div class=" address">
                <div class="col-md-4 fo-grid1">
                    <p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
                </div>
                <div class="col-md-4 fo-grid1">
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>
                </div>
                <div class="col-md-4 fo-grid1">
                    <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@example1.com</a></p>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
        <div class="copy-right">
            <p> &copy; 2016 Big store. All Rights Reserved | Design by  <a href="http://w3layouts.com/">UBTUIT.UZ</a></p>
        </div>
    </div>
</div>
<!-- //footer-->



<!-- smooth scrolling -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->


<script type="text/javascript">
    $(function () {

        var goToCartIcon = function($addTocartBtn){
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({
                top: position.top,
                left: position.left
            }, 500 , "linear", function() {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function(products) {
                $.each(products, function(){
                    console.log(this);
                });
            },
            clickOnAddToCart: function($addTocart){
                goToCartIcon($addTocart);
            },
            getDiscountPrice: function(products) {
                var total = 0;
                $.each(products, function(){
                    total += this.quantity * this.price;
                });
                return total * 1;
            }
        });

    });
</script>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
