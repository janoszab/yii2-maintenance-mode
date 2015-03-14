<?php

$this->title = \Yii::$app->name . ' - ' . Yii::t('maintenance', 'Maintenance mode');
?>
<!DOCTYPE html>
<html lang="<?= \Yii::$app->language ?>">
<head>
    <meta charset="<?= \Yii::$app->charset ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= \yii\helpers\Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <div class="header">
        <h3 class="text-muted"><?= \yii\helpers\Html::encode(\Yii::$app->name) ?></h3>
    </div>
    <div class="jumbotron">
        <p class="lead">
            <h1><?= \Yii::t('maintenance', 'Maintenance mode'); ?></h1>
        </p>
        <p class="lead"><?= \Yii::t('maintenance', 'Sorry, this page is currently not available.'); ?></p>
        <p class="lead"><?= \Yii::t('maintenance', 'This page is currently in a maintenance mode. Usually this takes 5-15 minutes.'); ?></p>
        <p class="lead"><?= \Yii::t('maintenance', 'Visit us again soon.'); ?></p>
    </div>
    <footer class="footer">
        <p>&copy; <?= \yii\helpers\Html::encode(\Yii::$app->name) ?> <?= date('Y') ?></p>
    </footer>
</div>
</body>
</html>
