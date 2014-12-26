<?php
/*
 * This file is part of the Sacara project.
 *
 * (c) Sacara project <https://github.com/sacara/>
 */
$this->title = \Yii::$app->name . ' - Maintenance';
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
        <h1>Maintenance mode</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
    </div>
    <footer class="footer">
        <p>&copy; <?= \yii\helpers\Html::encode(\Yii::$app->name) ?> <?= date('Y') ?></p>
    </footer>
</div>
</body>
</html>
