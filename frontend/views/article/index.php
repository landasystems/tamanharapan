<?php
/* @var $this yii\web\View */
$this->title = 'Informasi Kependidikan';

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
            <h1 class="f-primary-l c-default">Informasi Kependidikan</h1>
            <div class="f-primary-l f-inner-page-header_title-add c-denary">SMA Taman Harapan</div>
        </div>
    </div>
</div>
<div class="l-main-container">

    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?= Yii::$app->homeUrl ?>"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><span>Informasi Kependidikan</span></li>
            </ul>
        </div>
    </div>

    <div class="l-inner-page-container">
        <div class="container">
            <?php
            $perpage = isset($_GET['per-page']) ? $_GET['per-page'] : 5;
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $offset = ($perpage * $page) + ($perpage * -1);
            $articles = Article::find()
                    ->where(array(
                        'publish' => 1
                    ))
                    ->orderBy('created DESC')
                    ->limit($perpage)
                    ->offset($offset)
                    ->all();

            foreach ($articles as $isi):
                ?>
                <div class="b-blog-one-column__row">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class=" view view-sixth">
                                <img data-retina="" src="<?php echo (!empty($isi->primary_image)) ? Yii::$app->homeUrl.'images/article/'.$isi->primary_image : Yii::$app->homeUrl.'images/700x700-noimage.jpg'?>" alt="">
                                <div class="b-item-hover-action f-center mask">
                                    <div class="b-item-hover-action__inner">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <div class="b-blog__title b-form-row f-h4-special"><a href="<?php echo Yii::$app->urlManager->createUrl('article/'.$isi->id)?>" class="f-primary-l f-title-big f-blog__title"><?php echo $isi->title ?></a></div>
                            <div class="b-form-row f-h4-special clearfix">
                                
                                <div class="b-blog-one-column__info_container">
                                    <div class="b-blog-one-column__info">
                                        Categories : <a href="#" class="f-more"><?= $isi->category->name?></a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="b-form-row b-blog-one-column__text">
                                <?php echo substr(strip_tags($isi->content), 0, 400) . '...'; ?>
                            </div>
                            <div class="b-form-row b-null-bottom-indent">
                                <a href="<?php echo Yii::$app->urlManager->createUrl('article/'.$isi->id)?>" class="b-btn f-btn b-btn-md b-btn-default f-primary-b">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
            ?>


            <div class="b-pagination f-pagination">
                <?php
                $pagination = new Pagination(['totalCount' => count($models), 'pageSize' => 5]);

                echo \yii\widgets\LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
            </div>
        </div>
    </div>



</div>