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
     * @var string Filename when maintenance mode is on.
     */
    public $maintenanceFileOn = 'maintenance.on';

    /**
     * init()
     *
     * @return void
     */
    public function init()
    {
        parent::init();
        $this->registerTranslations();
        $maintenanceFilePath = \Yii::getAlias('@app') . '/web/';
        if (file_exists($maintenanceFilePath . $this->maintenanceFileOn)) {
            \Yii::$app->catchAll = ['maintenance'];
        }
    }

    /**
     * registerTranslations()
     *
     * @return void
     */
    public function registerTranslations()
    {
        \Yii::$app->i18n->translations['maintenance*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => __dir__ . '/messages'
        ];
    }
}
