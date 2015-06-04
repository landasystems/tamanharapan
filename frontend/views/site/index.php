<?php
/* @var $this yii\web\View */
$this->title = '::SMA Taman Harapan::';

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
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider2.JPG">
                            </li>
                            <li data-transition="slotfade-vertical" data-slotamount="7" >
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider3.JPG">
                            </li>
                            <li data-transition="slotfade-vertical" data-slotamount="7" >
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider4.JPG">
                            </li>
                            <li data-transition="slotfade-vertical" data-slotamount="7" >
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider5.JPG">
                            </li>
                            <li data-transition="slotfade-vertical" data-slotamount="7" >
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider6.JPG">
                            </li>
                            <li data-transition="slotfade-vertical" data-slotamount="7" >
                                <img data-retina src="../../../backend/www/tamanharapan/images/slider/slider7.JPG">
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="b-detail-home-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="b-form-row f-primary-l f-detail-home-content_title c-secondary f-h4-special b-blog__title clearfix">
                                Sambutan Kepala Sekolah
                            </div>
                            <div class="b-form-row f-h4-special clearfix">
                                <div class="b-blog-one-column__info_container b-blog-one-column__info_container--estate">
                                    <span class="b-txt-wrap"><button class="button-xs b-btn-title-real-estate f-primary-b">SMA Taman Harapan</button></span>
                                    <span class="b-txt-wrap"><span class="f-info b-info"><span class="f-primary-b">Ibu Sutiani, S.Pd, MM</span></span>
                                        <span class="b-blog-one-column__info_delimiter"></span></span>
                                </div>
                            </div>
                            <img src="<?php echo Yii::$app->homeUrl . '/images/Sutiani.jpg' ?>" align="left" style="width:170px; margin-right:10px" class="img-thumbnail"/>
                            <p class="f-primary-l">Assalamu'alaikum Wr.Wb</p>

                            <p style="line-height:1.5">Puji serta syukur kami panjatkan kehadirat Allah Tuhan Yang Maha Esa, karena atas rahmat dan karuniaNya kami masih diberikan kekuatan untuk menyambut masa depan yang terbentang di hadapan kita.</p>  

                            <p style="line-height:1.5">Di tengah persoalan yang ada dihadapan kita, kita harus tetap optimis bahwa setiap langkah dan tetesan keringat yang keluar dari tubuh kita merupakan saksi bisu perjuangan yang tidak bisa kita lupakan karena Allah pasti telah mencatatnya sebagai amal ibadah yang tiada bandingannya.</p>

                            <p class="f-primary-l">Atas nama Pimpinan SMA Taman Harapan Ibu bersyukur karena di tahun 2015 sekolah yng kita cintai SMA Taman Harapan bisa menikmati dan menggunakan “WEBSITE SMA TAMAN HARAPAN” sebagai sarana dalam menyampaikan aspirasi dan masukan serta kritik membangun untuk kemajuan SMA Taman Harapan yang kita cintai.</p>

                            <p class="f-primary-l">Anda bisa berkunjung ke setiap objek yang sudah kami lengkapi dengan photo-photo fasilitas dan prestasi sekolah serta photo bapak dan ibu guru melengkapi kebersamaan Anda di sekolah yang kita cintai yaitu SMA Taman Harapan.</p>

                            <p class="f-primary-l">Harapannya semoga website ini selalu menjadi teman Anda dalam suka dan duka, baik dalam bekerja maupun dalam keluarga sehingga menjadikan SMA Taman Harapan lebih baik dan lebih kreatif.</p>

                            <p style="line-height:1.5">Salam sejahtera teriring do'a buat semuanya tidak ada gading yang tak retak , semoga Allah selalu bersama kita</p>
                            <p class="f-primary-l">
                                Wassalamu'alaikum Wr.Wb</p>
                            <br>
                            <p class="f-primary-l">
                                <b> SUTIANI, S.PD, MM</b></p><div class="b-article__social-info">
                                <ul>
                                    <li>
                                        <div class="b-article__social">
                                            <span class="b-article__social-info-name f-article__social-info-name"><i class="fa fa-share-square"></i> Share this post :</span>
                                            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="b-tabs f-tabs j-tabs b-tabs-reset b-tabs--secondary f-tabs--secondary">
                        <ul>
                            <li><a href="#tabs-31">EUE Best Case Studie Award</a></li>
                            <li><a href="#tabs-32">SSN Akreditasi A</a></li>
                            <li><a href="#">Juara Tingkat 1 Malang</a></li>
                            <li><a href="#">Property Map</a></li>
                        </ul>
                        <div class="b-tabs__content">
                            <div id="tabs-31" class="clearfix">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="b-home-detail-option f-home-detail-option">
                                            <div class="b-some-examples__item_img view view-sixth">
                                                <img data-retina="" src="<?php echo Yii::$app->homeUrl ?>img/sertifikat/sertifikat2.jpg" height="300px" alt="" />
                                            </div>
                                            <div class="b-home-detail-option_row">
                                                <b>Sertifikat EIU Best Case Studies Award kepada "Dr. Siusana Kweldju" dari UNESCO</b>  
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="b-home-detail-option f-home-detail-option">
                                            <div class="b-some-examples__item_img view view-sixth">
                                                <img data-retina="" src="img/sertifikat/sertifikat1.jpg" height="300px"  alt="" />
                                            </div>
                                            <div class="b-home-detail-option_row">
                                                <!--                                                            <div class="b-home-detail-option_item_title">-->
                                                <b> Sertifikat "Global Citizenship Education for a Culture of Peace and Sustainable Future" dari UNESCO</b>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tabs-32" class="clearfix">
                                <h4 class="f-tabs-vertical__title f-primary-b">Prestasi</h4>
                                <img data-retina class="b-img-responsive b-img-l" src="img/shortcode/girl_img.jpg" alt=""/>
                                <p>Maecenas laoreet commodo arcu, eu semper lacus tincidunt eget. Vestibulum at arcu pulvinar, fermentum sapien nec, tristique dui. Ut feugiat est at sapien ullamcorper viverra. Vestibulum pretium malesuada elit rutrum condimentum. Maecenas laoreet commodo arcu, eu semper lacus tincidunt eget.</p>
                                <p>Vestibulum pretium malesuada elit rutrum condimentum. Donec bibendum scelerisque odio vulputate viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames acipsum </p>
                                <a href="#" class="f-more f-primary-b">Selanjutnya...</a>
                            </div>
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
                                        'publish' => 1
                                    ])
                                    ->orderBy('created DESC')
                                    ->limit(5)
                                    ->all();

                            foreach ($news as $item) {
                                ?>
                                <div class="b-some-examples__item f-some-examples__item">
                                    <div class="b-some-examples__item_img view view-sixth">
                                        <img data-retina="" src="<?php echo (!empty($item->primary_image)) ? Yii::$app->homeUrl . 'images/article/' . $item->primary_image : Yii::$app->homeUrl . 'images/700x700-noimage.jpg' ?>" alt="">
                                        <div class="b-item-hover-action f-center mask">
                                            <div class="b-item-hover-action__inner">
                                                <div class="b-item-hover-action__inner-btn_group">
                                                    <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-some-examples__item_info">
                                        <div class="b-some-examples__item_info_level b-some-examples__item_name f-some-examples__item_name f-primary-b"><a href="#"><?= $item->title ?></a></div>
                                        <div class="b-some-examples__item_info_level b-some-examples__item_description f-some-examples__item_description b-info-container--home">
                                            <?= substr(strip_tags($item->content), 0, 25); ?>
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
                        <h4 class="f-primary-b b-h4-special f-h4-special--gray">Sarana & Prasarana</h4>
                        <div class="j-accordion b-accordion b-accordion--with-standard-icon f-accordion b-accordion--smallindent active">
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
                                    <img data-retina src="images/sarpras/new-taman.JPG" alt=""/>
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
                                    <img data-retina src="img/sarpras/labfisika.JPG" alt=""/>
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
                                            <a href="mailto:info@smatamanharapan.sch.id">mail@example.com</a>
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
