<?php

namespace app\controllers;

use app\components\Tree;
use app\models\Article;
use app\models\Brand;
use app\models\Model;
use app\models\Pcategory;
use app\models\Portfolio;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'page' => [
                'class' => 'yii\web\ViewAction',
            ],
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBlog()
    {
        $articles = Article::find()->all();

        return $this->render('blog', [
            'articles' => $articles,
        ]);
    }

    public function actionArticle($slug)
    {
        $article = Article::getSingle($slug);
        $this->sendMetaTags($article);

        return $this->render('article', [
            'article' => $article,
        ]);
    }


    public function actionCategory()
    {
        $model = new Pcategory();
        $models = new Tree($model);
        $tree = $models->getTree();

        return $this->render('category',[
            'tree' => $tree,
        ]);
    }



    public function actionItems($slug)
    {
        $items = Portfolio::getPortfolios($slug);
        $brand = Pcategory::getSingle($slug);
        $brand_title = $brand->title;

        $this->sendMetaTags($items);

        return $this->render('items',[
            'items' => $items,
            'brand_title' => $brand_title
        ]);
    }

    public function actionItem($alias, $slug)
    {
        $item = Portfolio::findOne(['slug' => $slug]);
        $brand = Pcategory::getSingle($alias);
        $this->sendMetaTags($item);

        return $this->render('item',[
            'item' => $item,
            'brand' => $brand
        ]);
    }

    private function sendMetaTags($entity){
        $this->view->registerMetaTag(['name' => 'description', 'content' => $entity->meta_description]);
    }

    //    public function actionBrand()
//    {
//        $brands = Brand::find()->orderBy('title')->all();
//
//        return $this->render('brand', [
//            'brands' => $brands,
//        ]);
//    }

//    public function actionModel($id, $brand_title)
//    {
//        $models = Model::find()->where(['brand_id' => $id])->all();
//
//        return $this->render('model', [
//            'models' => $models,
//            'brand_title' => $brand_title
//        ]);
//    }

//    public function actionPortfolio($slug)
//    {
//        $models = Portfolio::find()->where(['brand_slug' => $slug])->all();
//        $brand = Brand::find()->where(['slug' => $slug])->one();
//        $brand_title = $brand->title;
//
//        return $this->render('portfolio', [
//            'models' => $models,
//            'brand_title' => $brand_title
//        ]);
//    }
}
