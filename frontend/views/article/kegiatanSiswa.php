<?php
$this->title = 'Kegiatan Siswa';

use common\models\ArticleCategory;
use common\models\Article;
use common\models\User;
use yii\data\Pagination;
use yii\widgets\LinkPager;
use yii\data\ActiveDataProvider;
use yii\web\UrlManager;

$session = Yii::$app->session;
?>
<div class="j-menu-container"></div>

<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
    <div class="b-inner-page-header__content">
        <div class="container">
            <h1 class="f-primary-l c-default">Kegiatan Siswa</h1>
        </div>
    </div>
</div>
<div class="l-main-container">

    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">Profil</a></li>
                <li><i class="fa fa-angle-right"></i><span>Kegiatan Siswa</span></li>
            </ul>
        </div>
    </div>

    <div class="l-inner-page-container">
        <div class="container">
            <div class="row j-masonry b-col-default-indent">
                <div class="masonry-gridSizer col-xs-12 col-md-4"></div>

                <?php
                $perpage = isset($_GET['per-page']) ? $_GET['per-page'] : 6;
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $offset = ($perpage * $page) + ($perpage * -1);
                $articles = Article::find()
                        ->where(array(
                            'publish' => 1,
                            'article_category_id' => '12'
                        ))
                        ->orderBy('created DESC')
                        ->limit($perpage)
                        ->offset($offset)
                        ->all();

                foreach ($articles as $isi):
                    ?>

                    <div class="j-masonry-item col-xs-12 col-md-4">
                        <div class="b-blog-preview">
                            <div class="b-blog-preview__img view view-sixth">
                                <img data-retina="" src="<?php echo (!empty($isi->primary_image)) ? Yii::$app->homeUrl . 'images/article/' . $isi->primary_image : Yii::$app->homeUrl . 'images/700x700-noimage.jpg' ?>" height="250" alt="">
                                <div class="b-item-hover-action f-center mask">
                                    <div class="b-item-hover-action__inner">

                                    </div>
                                </div>
                            </div>
                            <div class="b-blog-preview__content b-diagonal-line-bg-light">
                                <div class="b-blog-preview__content-padding_box">
                                    <p class="f-blog-preview__content-title f-primary-b"><a href="<?php echo Yii::$app->urlManager->createUrl('article/' . $isi->id) ?>"><?php echo $isi->title ?></a></p>
                                    <p class="f-blog-preview__content-date f-primary-it"><?= date('d F Y', strtotime($isi->created)) ?></p>
                                    <div class="b-form-row b-blog-one-column__text">
                                        <?php echo substr(strip_tags($isi->content), 0, 80) . '...'; ?>
                                    </div>
                                    <div class="b-form-row b-null-bottom-indent">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl('article/' . $isi->id) ?>" class="b-btn f-btn b-btn-md b-btn-default f-primary-b">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>

            </div>

                <div class="b-pagination f-pagination">
                    <?php
                    $pagination = new Pagination(['totalCount' => count($models), 'pageSize' => 6]);

                    echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                    ?>
                </div>
        </div>
    </div>
</div>