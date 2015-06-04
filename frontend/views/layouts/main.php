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
        <link rel="shortcut icon" href="favicon.ico">
        <?= Html::csrfMetaTags() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
        <!-- bxslider -->
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/bxslider/jquery.bxslider.css">
        <!-- End bxslider -->
        <!-- flexslider -->
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/flexslider/flexslider.css">
        <!-- End flexslider -->
        <!-- bxslider -->
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/radial-progress/style.css">
        <!-- End bxslider -->

        <!-- Animate css -->
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/animate.css">
        <!-- End Animate css -->

        <!-- Bootstrap css -->
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/bootstrap.min.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/bootstrap-progressbar/bootstrap-progressbar-3.2.0.min.css">
        <!-- End Bootstrap css -->

        <!-- Jquery UI css -->
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/jqueryui/jquery-ui.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/jqueryui/jquery-ui.structure.css">
        <!-- End Jquery UI css -->

        <!-- Fancybox -->
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/fancybox/jquery.fancybox.css">
        <!-- End Fancybox -->

        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>fonts/fonts.css">
        <link type="text/css" data-themecolor="default" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/main-default.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/rs-plugin/css/settings.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>js/rs-plugin/css/settings-custom.css">
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
                        <a href="mailto:info@tamanharapan.sch.id"><i class="fa fa-envelope-o"></i> info@tamanharapan.sch.id</a>
                        <a href="#"><i class="fa fa-phone"></i> (0341) 986 386</a>
                    </div>
                </div>
            </div>
            <div class="container b-header__box b-relative">
                <a href="<?= Yii::$app->homeUrl ?>" class="b-left b-logo"><img class="color-theme" data-retina src="<?= Yii::$app->homeUrl ?>img/smataman.png" alt="Logo" style="width:230px !important"/></a>
                <div class="b-header-r b-right">
                    <div class="b-header-ico-group f-header-ico-group b-right">
                        <span class="b-search-box">
                            <i class="fa fa-search"></i>
                            <input type="text" placeholder="Pencarian berita"/>
                        </span>
                    </div>
                    <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>
                    <nav class="b-top-nav f-top-nav b-right j-top-nav">
                        <ul class="b-top-nav__1level_wrap">
                            <li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b"><a href="<?= Yii::$app->homeUrl ?>"><i class="fa fa-home b-menu-1level-ico"></i>Home <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a></li>
                            <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                                <a href="<?= Yii::$app->homeUrl?>"><i class="fa fa-folder-open b-menu-1level-ico"></i>Profil<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                                <div class="b-top-nav__dropdomn">
                                    <ul class="b-top-nav__2level_wrap">
                                        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= Yii::$app->urlManager->createUrl('article/visi-misi')?>"><i class="fa fa-angle-right"></i>Visi Misi</a></li>
                                        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= Yii::$app->urlManager->createUrl('article/sarpras')?>"><i class="fa fa-angle-right"></i>SAPRAS</a></li>
                                        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= Yii::$app->urlManager->createUrl('article/guru-siswa')?>"><i class="fa fa-angle-right"></i>Data Guru & Siswa</a></li>
                                        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= Yii::$app->urlManager->createUrl('article/kegiatan-siswa')?>"><i class="fa fa-angle-right"></i>Kegiatan Siswa</a></li>
                                        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= Yii::$app->urlManager->createUrl('article/sejarah')?>"><i class="fa fa-angle-right"></i>Sejarah</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                                <a href="<?= Yii::$app->urlManager->createUrl('article/index')?>"><i class="fa fa-picture-o b-menu-1level-ico"></i>Informasi <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                            </li>
                            <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                                <a href="<?= Yii::$app->urlManager->createUrl('article/prestasi')?>"><i class="fa fa-code b-menu-1level-ico"></i>Prestasi/ Lulusan <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                            </li>
                            <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
                                <a href="<?= Yii::$app->urlManager->createUrl('site/contact')?>"><i class="fa fa-folder-open b-menu-1level-ico"></i>Contact<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>
        </header>
        <div class="j-menu-container"></div>
        <div class="l-main-container">
            <?php echo $content;?>
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
                            <nav class="b-bottom-nav f-bottom-nav b-right hidden-xs">
                                <ul>
                                    <li><a href="../../html/homepage-1-index.html">Home</a></li>
                                    <li><a href="../../html/portfolio_our_portfolio_1_colums.html">Visi Misi</a></li>
                                    <li><a href="../../html/portfolio_our_portfolio_1_colums.html">Sarana & Prasarana</a></li>
                                    <li><a href="../../html/portfolio_our_portfolio_1_colums.html">Data Guru & Siswa</a></li>
                                    <li><a href="../../html/portfolio_our_portfolio_1_colums.html">Kegiatan Siswa</a></li>
                                    <li><a href="../../html/portfolio_our_portfolio_1_colums.html">Sejarah</a></li>
                                    <li><a href="<?= Yii::$app->urlManager->createUrl('article/index.html?page=1&per-page=5')?>">Informasi</a></li>
                                    <li><a href="../../html/our_blog_1_columns.html">Prestasi/ Lulusan</a></li>
                                    <li><a href="../../html/page_search_result.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?= Yii::$app->homeUrl ?>js/breakpoints.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/jquery/jquery-1.11.1.min.js"></script>
        <!-- bootstrap -->
        <script src="<?= Yii::$app->homeUrl ?>js/scrollspy.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/bootstrap-progressbar/bootstrap-progressbar.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/bootstrap.min.js"></script>
        <!-- end bootstrap -->
        <script src="<?= Yii::$app->homeUrl ?>js/masonry.pkgd.min.js"></script>
        <script src='<?= Yii::$app->homeUrl ?>js/imagesloaded.pkgd.min.js'></script>
        <!-- bxslider -->
        <script src="<?= Yii::$app->homeUrl ?>js/bxslider/jquery.bxslider.min.js"></script>
        <!-- end bxslider -->
        <!-- flexslider -->
        <script src="<?= Yii::$app->homeUrl ?>js/flexslider/jquery.flexslider.js"></script>
        <!-- end flexslider -->
        <!-- smooth-scroll -->
        <script src="<?= Yii::$app->homeUrl ?>js/smooth-scroll/SmoothScroll.js"></script>
        <!-- end smooth-scroll -->
        <!-- carousel -->
        <script src="<?= Yii::$app->homeUrl ?>js/jquery.carouFredSel-6.2.1-packed.js"></script>
        <!-- end carousel -->
        <script src="<?= Yii::$app->homeUrl ?>js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/rs-plugin/videojs/video.js"></script>

        <!-- jquery ui -->
        <script src="<?= Yii::$app->homeUrl ?>js/jqueryui/jquery-ui.js"></script>
        <!-- end jquery ui -->
        <script type="text/javascript" language="javascript"
        src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCfVS1-Dv9bQNOIXsQhTSvj7jaDX7Oocvs"></script>
        <!-- Modules -->
        <script src="<?= Yii::$app->homeUrl ?>js/modules/sliders.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/modules/ui.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/modules/retina.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/modules/animate-numbers.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/modules/parallax-effect.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/modules/settings.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/modules/maps-google.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/modules/color-themes.js"></script>
        <!-- End Modules -->


        <script src="<?= Yii::$app->homeUrl ?>js/j.placeholder.js"></script>

        <!-- Fancybox -->
        <script src="<?= Yii::$app->homeUrl ?>js/fancybox/jquery.fancybox.pack.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/fancybox/jquery.mousewheel.pack.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/fancybox/jquery.fancybox.custom.js"></script>
        <!-- End Fancybox -->
        <script src="<?= Yii::$app->homeUrl ?>js/user.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/timeline.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/fontawesome-markers.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/markerwithlabel.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/cookie.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/loader.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/scrollIt/scrollIt.min.js"></script>
        <script src="<?= Yii::$app->homeUrl ?>js/modules/navigation-slide.js"></script>

    </body>
    <?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
