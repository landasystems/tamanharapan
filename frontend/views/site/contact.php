<?php

use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Kontak Kami';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="j-menu-container"></div>

<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
    <div class="b-inner-page-header__content">
        <div class="container">
            <h1 class="f-primary-l c-default">Contact us</h1>
        </div>
    </div>
</div>

<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
        </div>
    </div>
    <section class="b-google-map map-theme b-bord-box" data-location-set="contact-us">
        <div class="b-google-map__map-view b-google-map__map-height">
            <!-- Google map load -->
        </div>
        <img data-retina src="img/google-map-marker-default.png" data-label="" class="marker-template hidden" />
        <div class="b-google-map__info-window-template hidden"
             data-selected-marker="0"
             data-width="250">
            <div class="b-google-map__info-window f-center b-google-map__info-office f-google-map__info-office">
                <h4 class="f-primary-b">SMA Taman Harapan</h4>
                <small>Heading Office</small>
            </div>
        </div>
    </section>
    <div class="b-desc-section-container">
        <section class="container b-welcome-box">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <h1 class="is-global-title f-center">Sekolah Standart Nasional (SSN) Terakreditasi A</h1>
                    <p class="f-center">Terwujudnya Sekolah favorit/unggul berlandaskan IMTAQ
                        dan IPTEK yang berwawasan perdamaian.</p>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row">

                <div class="col-sm-6 b-contact-form-box">
                    <h3 class="f-primary-b b-title-description f-title-description">
                        contact info
                        <div class="b-title-description__comment f-title-description__comment f-primary-l">Quisque at tortor a libero posuere laoreet vitae sed arcu nunc at augue tincidunt </div>
                    </h3>
                    <div class="row b-google-map__info-window-address">
                        <ul class="list-unstyled">
                            <li class="col-xs-12">
                                <div class="b-google-map__info-window-address-icon f-center pull-left">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div>
                                    <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                        SMA TAMAN HARAPAN MALANG
                                    </div>
                                    <div class="desc">Jl. Majapahit 1, Malang.</div>
                                </div>
                            </li>
                            
                            <li class="col-xs-12">
                                <div class="b-google-map__info-window-address-icon f-center pull-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div>
                                    <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                        Telepon
                                    </div>
                                    <div class="desc">(0341) 986 386</div>
                                </div>
                            </li>
                            <li class="col-xs-12">
                                <div class="b-google-map__info-window-address-icon f-center pull-left">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div>
                                    <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                        email
                                    </div>
                                    <div class="desc">info@smatamanharapan.sch.id</div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="b-diagonal-line-bg-light b-bord-box">
        <section class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="f-primary-b b-title-description f-title-description">like us on facebook</h3>
                    <div class="b-wiget-fb">
                        <div class="b-wiget-fb-content" id="fb-root">
                            <div class="fb-like-box" data-width="285" data-href="https://www.facebook.com/FacebookDevelopers"
                                 data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false"
                                 data-show-border="false"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3 class="f-primary-b b-title-description f-title-description">twitter feeds</h3>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="b-twitter-feeds__item">
                                <div class="b-twitter-feeds__item_name f-twitter-feeds__item_name f-primary-b"><i
                                        class="fa fa-twitter"></i> SMA Taman Harapan
                                </div>
                                <div class="b-twitter-feeds__item_twit f-twitter-feeds__item_twit">
                                    Mewujudkan generasi penerus bangsa yang berjiwa besar. <a
                                        href="http://t.co/hd3sk" target="_blank">http://t.co/hd3sk</a>
                                </div>
                                <div class="b-twitter-feeds__item_date f-twitter-feeds__item_date f-primary-it c-senary">2 days
                                    ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>