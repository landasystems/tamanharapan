<?php

namespace frontend\controllers;

use Yii;
use common\models\Article;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\widgets\LinkPager;

class ArticleController extends Controller {

    public function actionView() {
        $this->layout = 'main';
        $model = Article::findOne($_GET['id']);
        if (empty($model)) {
            throw new NotFoundHttpException('The requested page does not exist.');
        } else {
//            $this->addHits($model);
            return $this->render('view', [
                        'model' => $model,
            ]);
        }
    }

    public function actionIndex() {
        $this->layout = 'main';
        $query = Article::find()
                ->where(array(
//                        'article_category_id' => '51'
                ))
                ->orderBy('id ASC')
                ->all();

//        $pagination = new Pagination([
//            'defaultPageSize' => 5,
//            'totalCount' => $query->count(),
//        ]);
//        $models = $query->offset($pagination->offset)
//                ->limit($pagination->limit)
//                ->all();

        return $this->render('index', [
                    'models' => $query,
//                    'pages' => $pages,
        ]);
    }

//    public function addHits($model) {
//        $model->hits++;
//        $model->save();
//    }
}
