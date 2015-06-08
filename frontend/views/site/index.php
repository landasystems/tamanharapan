<?php
/* @var $this yii\web\View */
$this->title = 'SMA Taman Harapan - Sekolah Standart Nasional - Sekolah Berprestasi di Malang';

//use common\models\ProductStock;
use common\models\Article;

$session = Yii::$app->session;
?>
<!--<div class="l-main-container">-->
<div class="l-inner-page-container">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="b-slidercontainer b-slider b-slider--thumb b-slider--thumb-visible b-small-arr f-small-arr b-slider--navi-alt b-slider--innerbullet">
                    <div class="j-contentwidthslider j-contentwidthslider-innerbullet">
                        <ul>
                            <li data-transition="slotfade-vertical" data-slotamount="7" >
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider1.jpg">
                            </li>
                            <li data-transition="slotfade-vertical" data-slotamount="7" >
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider2.jpg">
                            </li>
                            <li data-transition="slotfade-vertical" data-slotamount="7" >
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider3.jpg">
                            </li>
                            <li data-transition="slotfade-vertical" data-slotamount="7" >
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider4.jpg">
                            </li>
                            <li data-transition="slotfade-vertical" data-slotamount="7" >
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider5.jpg">
                            </li>
                            <li data-transition="slotfade-vertical" data-slotamount="7" >
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider6.jpg">
                            </li>
                            <li data-transition="slotfade-vertical" data-slotamount="7" >
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider7.jpg">
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="b-detail-home-content">
                    <?php $sambutan = Article::findOne(['id' => 19]); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="b-form-row f-primary-l f-detail-home-content_title c-secondary f-h4-special b-blog__title clearfix">
                                <?= $sambutan->title ?>
                            </div>
                            <div class="b-form-row f-h4-special clearfix">
                                <div class="b-blog-one-column__info_container b-blog-one-column__info_container--estate">
                                    <span class="b-txt-wrap"><button class="button-xs b-btn-title-real-estate f-primary-b">SMA Taman Harapan</button></span>
                                    <span class=""><span class="f-info b-info">IBU SUTIANI, S.Pd, MM</span>
                                        <span class="b-blog-one-column__info_delimiter"></span></span>
                                </div>
                            </div>
                            <img src="<?php echo Yii::$app->homeUrl . 'images/article/' . $sambutan->primary_image; ?>" align="left" style="width:170px; margin-right:10px" class="img-thumbnail"/>
                            <?php echo $sambutan->content; ?>
                        </div>
                    </div>
                </div>
                <hr/>
                <section>
                    <div class="b-carousel-secondary f-carousel-secondary b-some-examples-tertiary f-some-examples-tertiary b-carousel-reset">
                        <div class="b-carousel-title f-carousel-title f-primary-b">Informasi Terbaru</div>
                        <div class="b-some-examples f-some-examples j-carousel-sidebar">
                            <?php
                            $news = Article::find()
                                    ->where([
                                        'publish' => 1,
                                        'article_category_id' => ['14','10']
                                    ])
                                    ->orderBy('created DESC')
                                    ->limit(5)
                                    ->all();

                            foreach ($news as $item) {
                                ?>
                                <div class="b-some-examples__item f-some-examples__item">
                                    <div class="b-some-examples__item_img view view-sixth">
                                        <img data-retina="" src="<?php echo (!empty($item->primary_image)) ? Yii::$app->homeUrl . 'images/article/' . $item->primary_image : Yii::$app->homeUrl . 'images/700x700-noimage.jpg' ?>" height="190" alt="">
                                        <div class="b-item-hover-action f-center mask">
                                            <div class="b-item-hover-action__inner">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-some-examples__item_info">
                                        <div class="b-some-examples__item_info_level b-some-examples__item_name f-some-examples__item_name f-primary-b"><a href="<?= Yii::$app->urlManager->createUrl('article/' . $item->id) ?>"><?= $item->title ?></a></div>
                                        <div class="b-some-examples__item_info_level b-some-examples__item_description f-some-examples__item_description b-info-container--home">
                                            <?=substr(strip_tags($item->content), 0, 25); ?>
                                        </div>
                                    </div>
                                    <div class="b-some-examples__item_action">
                                        <div class="b-right">
                                            <a href="<?= Yii::$app->urlManager->createUrl('article/' . $item->id) ?>" class="b-btn f-btn b-btn-sm f-btn-sm b-btn-default f-primary-b">Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
            </div>
            <div class="visible-xs-block visible-sm-block b-hr"></div>
            <div class="col-md-3 col-md-pull-9">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="b-find_title f-find_title f-primary-b">Sarana & Prasarana</h4>
                        <div class="j-accordion b-accordion b-accordion--with-standard-icon f-accordion b-accordion--smallindent">
                            
                            <h3 class="b-accordion__title f-accordion__title">Lapangan Basket</h3>
                            <div class="b-accordion__content">
                                <div class="b-accordion__img">
                                    <img data-retina src="images/sarpras/newbasket.jpg" alt=""/>
                                </div>
                                <div>
                                    <p>Fasilitas Lapangan basket luas dan bersih</p>

                                </div>
                            </div>
                            
                            <h3 class="b-accordion__title f-accordion__title"> Kantin</h3>

                            <div class="b-accordion__content">
                                <div class="b-accordion__img">
                                    <img data-retina src="images/sarpras/kantin.jpg" alt=""/>
                                </div>
                                <!--<p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>-->

                                <div>
                                    <p>Kantin yang berada di dalam sekolah dengan makanan segar dan fresh</p>

                                </div>
                            </div>
                            <h3 class="b-accordion__title f-accordion__title">Perpus</h3>

                            <div class="b-accordion__content">
                                <div class="b-accordion__img">
                                    <img data-retina src="images/sarpras/perpus.jpg" alt=""/>
                                </div>
                                <!--<p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>-->

                                <p>Perpustakaan dengan koleksi buku yang lengkap dan mendidik</p>
                            </div>
                            <h3 class="b-accordion__title f-accordion__title">Taman Hijau</h3>

                            <div class="b-accordion__content">
                                <div class="b-accordion__img">
                                    <img data-retina src="images/sarpras/new-taman.jpg" alt=""/>
                                </div>
                                <!--<p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>-->

                                <p>taman hijau dan asri serta nyaman membuat susana menjadi teduh</p>
                            </div>
                            <h3 class="b-accordion__title f-accordion__title">Lab Komputer</h3>

                            <div class="b-accordion__content">
                                <div class="b-accordion__img">
                                    <img data-retina src="images/sarpras/labkom.jpg" alt=""/>
                                </div>
                                <!--<p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>-->

                                <p>Lab Komputer dengan fasilitas lengkap guna mendukung siswa belajar</p>
                            </div>
                            <h3 class="b-accordion__title f-accordion__title">Lab Fisika</h3>

                            <div class="b-accordion__content">
                                <div class="b-accordion__img">
                                    <img data-retina src="images/sarpras/labfisika.jpg" alt=""/>
                                </div>
                                <!--<p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>-->

                                <p>Lab. Fisika lengkap beserta alat-alat fisika yang memadai berguna untuk mendukung siswa praktikum</p>
                            </div>
                            <h3 class="b-accordion__title f-accordion__title">Toilet bersih & nyaman</h3>

                            <div class="b-accordion__content">
                                <div class="b-accordion__img">
                                    <img data-retina src="images/sarpras/newtoilet.jpg" alt=""/>
                                </div>
                                <!--<p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>-->

                                <p>Toilet di jamin bersih dan nyaman</p>
                            </div>
                            <h3 class="b-accordion__title f-accordion__title">Ruang UKS</h3>

                            <div class="b-accordion__content">
                                <div class="b-accordion__img">
                                    <img data-retina src="images/sarpras/new-uks.jpg" alt=""/>
                                </div>
                                <!--<p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>-->

                                <p>Ruang UKS dengan perlatan P3k lengkap berguna buat penangan pertolongan pertama untuk siswa yang lagi sakit</p>
                            </div>
                            <h3 class="b-accordion__title f-accordion__title">Majalah Dinding</h3>

                            <div class="b-accordion__content">
                                <div class="b-accordion__img">
                                    <img data-retina src="images/sarpras/mading.jpg" alt=""/>
                                </div>
                                <!--<p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>-->

                                <p>Majalah Dinding yang selalu update berita dan pengumuman untuk siswa yang di kelolah oleh para siswa sendiri</p>
                            </div>

                            <h3 class="b-accordion__title f-accordion__title">Ruang Tunggu</h3>

                            <div class="b-accordion__content">
                                <div class="b-accordion__img">
                                    <img data-retina src="images/sarpras/newrtunggu.jpg" alt=""/>
                                </div>
                                <!--<p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>-->

                                <p>Ruang Tunggu yang nyaman berfungsi supaya para tamu bisa nyaman dan tenang</p>
                            </div>
                            <h3 class="b-accordion__title f-accordion__title">Ruang Tata Usaha</h3>

                            <div class="b-accordion__content">
                                <div class="b-accordion__img">
                                    <img data-retina src="images/sarpras/newrtu.jpg" alt=""/>
                                </div>
                                <!--<p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>-->

                                <p>Ruang Tata Usaha yang dilengkapi dengan mesin foto kopi agar siswa tidak perlu keluar sekolah untuk memfoto kopi tugasnya</p>
                            </div>
                            <h3 class="b-accordion__title f-accordion__title">Ruang Guru</h3>

                            <div class="b-accordion__content">
                                <div class="b-accordion__img">
                                    <img data-retina src="images/sarpras/rguru.JPG" alt=""/>
                                </div>
                                <!--<p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>-->

                                <p>ruang Guru yang nyaman agar guru dapat nyaman menjalankan aktifitas kerja</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top:10px">
                    <div class="col-md-12">
                        <div class="b-find-box">
                            <div class="b-find_title f-find_title f-primary-b">
                                <i class="fa fa-search"></i>
                                Contact
                            </div>
                            <div class="b-find_form f-find_form">
                                <div class="b-form-row">
                                    <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
                                        <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="b-remaining f-contacts-short-item__text">
                                            <b>SMA Taman Harapan</b><br/>
                                            Jalan Mojopahit no 1 <br/>(Selatan Balai Kota Malang)<br/>
                                            Jawa Timur<br/>
                                        </div>
                                    </div>
                                    <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
                                        <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
                                            <a href="mailto:info@smatamanharapan.sch.id">info@smatamanharapan.sch.id</a>
                                        </div>
                                    </div>
                                    <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
                                        <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
                                            (0341) 362 400
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--</div>-->
