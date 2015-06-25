<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <!-- bower:css -->
    <link rel="stylesheet" href="/vendor/bower/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="/vendor/bower/morrisjs/morris.css" />
    <link rel="stylesheet" href="/vendor/bower/metisMenu/dist/metisMenu.css" />
    <!-- endbower -->
    <?= Html::cssFile(YII_DEBUG ? '@web/css/all.css' : '@web/css/all.min.css?v=' . filemtime(Yii::getAlias('@webroot/css/all.min.css'))) ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div id="wrapper">
        <?= $this->render('@app/views/components/navbar') ?>
        <div id="page-wrapper">
            <?= $content ?>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>
    <!-- bower:js -->
    <script src="/vendor/bower/jquery/dist/jquery.js"></script>
    <script src="/vendor/bower/bootstrap/dist/js/bootstrap.js"></script>
    <script src="/vendor/bower/raphael/raphael.js"></script>
    <script src="/vendor/bower/mocha/mocha.js"></script>
    <script src="/vendor/bower/morrisjs/morris.js"></script>
    <script src="/vendor/bower/metisMenu/dist/metisMenu.js"></script>
    <!-- endbower -->
    <?= Html::jsFile(YII_DEBUG ? '@web/js/all.js' : '@web/js/all.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/all.min.js'))) ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
