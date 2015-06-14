<?php

use common\models\Article;
$this->title = 'VISI, MISI DAN TUJUAN SEKOLAH';


?>
<div class="j-menu-container"></div>

<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
    <div class="b-inner-page-header__content">
        <div class="container">
            <h1 class="f-primary-l c-default">VISI, MISI DAN TUJUAN SEKOLAH</h1>
        </div>
    </div>
</div>

<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?= Yii::$app->homeUrl ?>"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i>Visi, Misi, dan Tujuan Sekolah</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="l-inner-page-container">
            <div class="b-shortcode-example b-remaining">
                <div  data-active="3" class="b-tabs-vertical b-tabs-vertical--default f-tabs-vertical j-tabs-vertical b-tabs-reset row">
                    <div class="col-md-3 col-sm-4 b-tabs-vertical__nav">
                        <ul>
                            <li class="ui-state-default ui-corner-left ui-tabs-active ui-state-active"  aria-selected="true" aria-expanded="true"><a class="f-primary-l" href="#tabs-1"><i class="fa fa-suitcase"></i> A. Visi</a></li>
                            <li class="ui-state-default ui-corner-left" aria-selected="false" aria-expanded="false"><a class="f-primary-l" href="#tabs-2"><i class="fa fa-flask"></i> B. Misi</a></li>
                            <li class="ui-state-default ui-corner-left" aria-selected="false" aria-expanded="false"><a class="f-primary-l" href="#tabs-3"><i class="fa fa-flag"></i> C. Tujuan</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-8 b-tabs-vertical__content">
                        <div id="tabs-1" aria-hidden="false">
                            <div class="b-tabs-vertical__content-text">
                                <h3 class="f-tabs-vertical__title f-primary-b">Visi</h3>
                                <p><?php
                                    $tujuan = Article::findOne(['id'=>13]);
                                    echo $tujuan->content;
                                ?></p>
                            </div>
                        </div>
                        <div id="tabs-2" aria-hidden="true">
                            <div class="b-tabs-vertical__content-text">
                                <h3 class="f-tabs-vertical__title f-primary-b">Misi</h3>
                                <p><?php
                                    $tujuan = Article::findOne(['id'=>14]);
                                    echo $tujuan->content;
                                ?></p>
                            </div>
                        </div>
                        <div id="tabs-3" aria-hidden="true">
                            <div class="b-tabs-vertical__content-text">
                                <h3 class="f-tabs-vertical__title f-primary-b">Tujuan</h3>
                                <p><?php
                                    $tujuan = Article::findOne(['id'=>15]);
                                    echo $tujuan->content;
                                ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="b-hr-light"/>
        </div>
    </div>
</div>