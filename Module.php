<?php
/**
 * Yii2-maintenance module.
 *
 * @author Nico Schefuß <redirectn1k@gmail.com>
 */
namespace sacara\maintenance;

class Module extends \yii\base\Module
{
    /**
     * @var string Default route.
     */
    public $defaultRoute = 'maintenance';

    /**
     * init()
     *
     * @return void
     */
    public function init()
    {
        parent::init();
        \Yii::$app->i18n->translations['maintenance*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => __DIR__ . '/messages',
        ];
        if (file_exists(\Yii::getAlias('@app') . '/web/maintenance')) {
            \Yii::$app->catchAll = ['maintenance'];
        }
    }
}
