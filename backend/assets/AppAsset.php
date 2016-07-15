<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    
    public $css = [
        'css/site.css',
        'datepicker/datepicker3.css',
        'daterangepicker/daterangepicker-bs3.css'
    ];
    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js',
        'input-mask/jquery.inputmask.js',
        'input-mask/jquery.inputmask.extensions.js',
        'input-mask/jquery.inputmask.date.extensions.js',
        'datepicker/bootstrap-datepicker.js',
        'daterangepicker/daterangepicker.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
