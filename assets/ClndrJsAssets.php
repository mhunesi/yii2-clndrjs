<?php
/**
 * (developer comment)
 *
 * @link http://www.mustafaunesi.com.tr/
 * @copyright Copyright (c) 2020 Polimorf IO
 * @product PhpStorm.
 * @author : Mustafa Hayri ÜNEŞİ <mhunesi@gmail.com>
 * @date: 2020-04-10
 * @time: 11:35
 */

namespace mhunesi\clndrjs\assets;

use Yii;
use yii\web\AssetBundle;

class ClndrJsAssets extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__.'/_bundle';
        parent::init();
    }

    public $js = [
        'js/clndr.min.js',
    ];

    public $css = [
        'css/clndr.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'mhunesi\clndrjs\assets\MomentJsAssets',
        'mhunesi\clndrjs\assets\UnderscoreAssets'
    ];
}