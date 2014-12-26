<?php
/**
 * MaintenanceController
 */
namespace sacara\maintenance\controllers;

class MaintenanceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        exit('Maintenance mode.');
    }
}
