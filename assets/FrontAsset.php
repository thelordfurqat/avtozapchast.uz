<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FrontAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'theme/css/bootstrap.css',
        'theme/css/style.css',
        'theme/css/font-awesome.css',
        '//fonts.googleapis.com/css?family=Montserrat:400,700',
        '//fonts.googleapis.com/css?family=Noto+Sans:400,700',
        'theme/css/jstarbox.css',

    ];
    public $js = [
        'theme/js/jquery-1.11.1.min.js',
        'theme/js/move-top.js',
        'theme/js/easing.js',
        'theme/js/bootstrap.js',
        'theme/js/jquery.mycart.js',
        'theme/js/jstarbox.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
