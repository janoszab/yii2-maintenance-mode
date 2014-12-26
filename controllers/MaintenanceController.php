<?php
/*
 * This file is part of the Sacara project.
 *
 * (c) Sacara project <https://github.com/sacara/>
 */
namespace sacara\maintenance\controllers;

class MaintenanceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}
