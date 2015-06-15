<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\models\Product;
use yii\bootstrap\ActiveForm;

$session = Yii::$app->session;

/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <title><?= Html::encode($this->title) ?></title>
        <link rel="shortcut icon" href="images/favicon.ico">
        <?= Html::csrfMetaTags() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/bxslider/jquery.bxslider.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/flexslider/flexslider.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/animate.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/jqueryui/jquery-ui.structure.css">
        <link type="text/css" data-themecolor="default" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/main-default.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/rs-plugin/css/settings.css">
        <?php $this->head() ?>
    </head>
    <body>
        <style>
            header{
                padding : 0px 0px 0px !important;
            }
        </style>
        <?php $this->beginBody() ?>
        <!--<div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> removed by integration-->
        <header>
            <div class="b-top-options-panel b-top-options-panel--color">
                <div class="container">
                    <div class="b-option-contacts f-option-contacts">
                        <a href="mailto:info@smatamanharapan.sch.id"><i class="fa fa-envelope-o"></i> info@smatamanharapan.sch.id</a>
                        <a href="#"><i class="fa fa-phone"></i> (0341) 986 386</a>
                    </div>
                    <div class="b-option-contacts f-option-contacts" style="float: right;">
                        <a href="#"><i class="fa fa-facebook"></i> Like</a>
                        <a href="#"><i class="fa fa-twitter"></i> Follow</a>
                    </div>
                </div>
            </div>
            <div class="container b-header__box b-relative">
                <a href="<?= Yii::$app->homeUrl ?>" class="b-left b-logo"><img class="color-theme" data-retina src="<?= Yii::$app->homeUrl ?>img/logo.png" alt="Logo" style=""/></a>
                <div class="b-header-r b-right">
                    <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>
                    <nav class="b-top-nav f-top-nav b-right j-top-nav">
                        <ul class="b-top-nav__1level_wrap">
                            <li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level"><a href="<?= Yii::$app->homeUrl ?>"><i class="fa fa-home b-menu-1level-ico"></i>Home</a></li>
                            <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                                <a href="#"><i class="glyphicon glyphicon-list-alt b-menu-1level-ico"></i>Profil<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                                <div class="b-top-nav__dropdomn">
                                    <ul class="b-top-nav__2level_wrap">
                                        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= Yii::$app->urlManager->createUrl('article/visi-misi') ?>"><i class="fa fa-angle-right"></i>Visi Misi</a></li>
                                        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= Yii::$app->urlManager->createUrl('article/sarpras') ?>"><i class="fa fa-angle-right"></i>Sarana & Prasarana</a></li>
                                        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= Yii::$app->urlManager->createUrl('article/guru-siswa') ?>"><i class="fa fa-angle-right"></i>Data Guru & Siswa</a></li>
                                        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= Yii::$app->urlManager->createUrl('article/kegiatan-siswa') ?>"><i class="fa fa-angle-right"></i>Kegiatan Siswa</a></li>
                                        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= Yii::$app->urlManager->createUrl('article/sejarah') ?>"><i class="fa fa-angle-right"></i>Sejarah</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                                <a href="<?= Yii::$app->urlManager->createUrl('article/index') ?>"><i class="glyphicon glyphicon-info-sign b-menu-1level-ico"></i>Informasi</a>
                            </li>
                            <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                                <a href="<?= Yii::$app->urlManager->createUrl('article/prestasi') ?>"><i class="glyphicon glyphicon-stats b-menu-1level-ico"></i>Prestasi/ Lulusan</a>
                            </li>
                            <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                                <a href="<?= Yii::$app->urlManager->createUrl('site/contact') ?>"><i class="glyphicon glyphicon-user b-menu-1level-ico"></i>Contact</a>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>
        </header>
        <div class="j-menu-container"></div>
        <div class="l-main-container">
            <?php echo $content; ?>
        </div>
        <footer>
            <div class="b-footer-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12 f-copyright b-copyright">Copyright © 2015 - All Rights Reserved</div>
                        <div class="col-sm-8 col-xs-12">
                            <div class="b-btn f-btn b-btn-default b-right b-footer__btn_up f-footer__btn_up j-footer__btn_up">
                                <i class="fa fa-chevron-up"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?= Yii::$app->homeUrl ?>js/breakpoints.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/scrollspy.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/bxslider/jquery.bxslider.min.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/jqueryui/jquery-ui.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/modules/sliders.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/modules/ui.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/modules/color-themes.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/user.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/cookie.js"></script>
        

    </body>
    <?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
