
<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        
                    // 'assets/css/bootstrap.min.css',
                    // 'assets/css/fontawesome/css/font-awesome.min.css',
                    // 'assets/css/owl.carousel.css',
                    // 'assets/css/bootstrap-select.min.css',
                    // 'assets/css/magnific-popup.css',
                    // 'assets/css/style.css',
                    // 'assets/css/skin/skin-1.css',
                    // 'assets/css/templete.css',
                    // 'plugins/revolution/revolution/css/settings.css',
                    // 'plugins/revolution/revolution/css/layers.css',
                    // 'plugins/revolution/revolution/css/navigation.css',
                    
                       ];
    public $js = [

'assets/js/jquery.min.js',

'assets/js/bootstrap.min.js',

'assets/js/bootstrap-select.min.js',

'assets/js/jquery.bootstrap-touchspin.js',
'assets/js/magnific-popup.js',

'assets/js/waypoints-min.js',

'assets/js/counterup.min.js',

'assets/js/imagesloaded.js',

'assets/js/masonry-3.1.4.js',

'assets/js/masonry.filter.js',

'assets/js/owl.carousel.js',

'assets/js/custom.js',

'assets/js/dz.ajax.js',

'assets/js/dz.carousel.js',
'assets/js/jquery.js',
'assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js',
'assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js',
'assets/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js',
'assets/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js',
'assets/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js',
'assets/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js',
'assets/plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js',
'assets/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js',
'assets/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js',
'assets/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js',
'assets/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js',
'assets/js/rev.slider.js',
// 'assets/js/jquery.min.js',

// 'assets/js/bootstrap.min.js',

// 'assets/js/bootstrap-select.min.js',

// 'assets/js/jquery.bootstrap-touchspin.js',
// 'assets/js/magnific-popup.js',

// 'assets/js/waypoints-min.js',

// 'assets/js/counterup.min.js',

// 'assets/js/imagesloaded.js',

// 'assets/js/masonry-3.1.4.js',

// 'assets/js/masonry.filter.js',

// 'assets/js/owl.carousel.js',

// 'assets/js/custom.js',

// 'assets/js/dz.ajax.js',

// 'assets/js/dz.carousel.js',
// 'assets/js/jquery.js',


// 'assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js',
// 'assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js',

// 'assets/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js',

// 'assets/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js',
// 'assets/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js',

// 'assets/js/rev.slider.js',



    ];
    public $depends = [
        
    ];
}
