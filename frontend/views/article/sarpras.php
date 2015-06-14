<?php
$this->title = 'Sarana dan Prasarana';

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
            <h1 class="f-primary-l c-default">Sarana dan Prasarana</h1>
        </div>
    </div>
</div>
<div class="l-main-container">

    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?= Yii::$app->homeUrl ?>"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">Profil</a></li>
                <li><i class="fa fa-angle-right"></i><span>Sarana dan Prasarana</span></li>
            </ul>
        </div>
    </div>

    <div class="l-inner-page-container">
        <div class="container">
            <div class="row j-masonry b-col-default-indent">
                <div class="masonry-gridSizer col-xs-12 col-md-4"></div>
                <?php
                $tujuan = Article::findOne(['id' => 39]);
                echo $tujuan->content;
                ?>
            </div>

        </div>
    </div>
</div>
