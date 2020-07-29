<?php

namespace mhunesi\clndrjs;

use mhunesi\clndrjs\assets\ClndrJsAssets;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;

/**
 * This is just an example.
 */
class ClndrJsWidget extends \yii\base\Widget
{
    public $options = [];

    public $clientOptions = [];

    public $templateView = '@vendor/mhunesi/yii2-clndrjs/views/_template';
    
    public function init()
    {
        parent::init();

        $this->options['id'] = $this->id;

        $this->clientOptions = ArrayHelper::merge([
           'template' => new JsExpression("$('#clndr-template').html()")
        ],$this->clientOptions);

        $this->registerAssets();

        $this->registerTranslations();
    }

    public function run()
    {
        echo $this->view->render($this->templateView);

        echo Html::tag('div','', $this->options);
    }

    public function registerAssets()
    {
        ClndrJsAssets::register($this->view);

        $language = substr(Yii::$app->language,0,2);

        $this->view->registerJs("moment.locale('{$language}');");

        $jsonClientOptions = Json::encode($this->clientOptions);

        $this->view->registerJs("$('#{$this->id}').clndr($jsonClientOptions)");
    }

    public function registerTranslations()
    {
        $i18n = Yii::$app->i18n;
        $i18n->translations['clndrjs'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@vendor/mhunesi/yii2-clndrjs/messages',
        ];
    }

    public static function t($message, $params = [], $language = null)
    {
        return Yii::t('clndrjs', $message, $params, $language);
    }
}
