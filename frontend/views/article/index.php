<?php
/* @var $this yii\web\View */
$this->title = 'Pengumuman';

use common\models\ArticleCategory;
use common\models\Article;
use yii\data\Pagination;

$session = Yii::$app->session;
?>
<div class="j-menu-container"></div>

<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
    <div class="b-inner-page-header__content">
        <div class="container">
            <h1 class="f-primary-l c-default">Our Blog</h1>
            <div class="f-primary-l f-inner-page-header_title-add c-senary">One Column Default version</div>
        </div>
    </div>
</div>
<div class="l-main-container">

    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">Blogs</a></li>
                <li><i class="fa fa-angle-right"></i><span>One Column Default version</span></li>
            </ul>
        </div>
    </div>

    <div class="l-inner-page-container">
        <div class="container">
            <?php
            $articles = Article::find()
                    ->where(array(
//                        'article_category_id' => '51'
                    ))
                    ->orderBy('article_category_id ASC')
//                    ->limit(2,0)
                    ->all();
            foreach ($articles as $isi):
                ?>
                <div class="b-blog-one-column__row">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class=" view view-sixth">
                                <img data-retina="" src="<?= Yii::$app->homeUrl ?>img/blog/fullscreen/our_blog_1_columns_boots.jpg" alt="">
                                <div class="b-item-hover-action f-center mask">
                                    <div class="b-item-hover-action__inner">
                                        <div class="b-item-hover-action__inner-btn_group">
                                            <a href="blog_detail_left_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <div class="b-blog__title b-form-row f-h4-special"><a href="blog_detail_right_slidebar.html" class="f-primary-l f-title-big f-blog__title"><?php echo $isi->title ?></a></div>
                            <div class="b-form-row f-h4-special clearfix">
                                <div class="pull-left">
                                    <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate b-blog-one-column__info_edit">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </div>
                                <div class="b-blog-one-column__info_container">
                                    <div class="b-blog-one-column__info">
                                        Categories : <a href="#" class="f-more">Animation</a>, <a href="#" class="f-more">Game Design</a>
                                        <span class="b-blog-one-column__info_delimiter"></span>
                                        Tag : <a href="#" class="f-more">Nllam</a>
                                        <span class="b-blog-one-column__info_delimiter"></span>
                                        <a href="#" class="f-more f-primary"><i class="fa fa-comment"></i>12 Comments</a>
                                    </div>
                                </div>
                            </div>
                            <div class="b-form-row b-blog-one-column__text">
                                <?php echo substr($isi->content, 0, 200) . '...'; ?>
                            </div>
                            <div class="b-form-row b-null-bottom-indent">
                                <a href="blog_detail_right_slidebar.html" class="b-btn f-btn b-btn-md b-btn-default f-primary-b">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
            ?>


            <div class="b-pagination f-pagination">
                <ul>
                    <li><a href="#">First</a></li>
                    <li><a class="prev" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <?php
                    $pagination = new Pagination(['totalCount' => $articles->count(), 'pageSize' => 30]);

                    echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                    ?>
                    <li class="is-active-pagination"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a class="next" href="#"><i class="fa fa-angle-right"></i></a></li>
                    <li><a href="#">Last</a></li>
                </ul>
            </div>
        </div>
    </div>



</div>