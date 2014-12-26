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
        if (file_exists(\Yii::getAlias('@app') . '/web/maintenance')) {
            \Yii::$app->catchAll = ['maintenance'];
        }
    }
}
