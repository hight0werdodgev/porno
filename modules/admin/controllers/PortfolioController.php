<?php

namespace app\modules\admin\controllers;

use app\models\Pcategory;
use Yii;
use app\models\Portfolio;
use app\models\PortfolioSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class PortfolioController extends Controller
{
    use MetaController;

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new PortfolioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id)
        ]);
    }

    public function actionCreate()
    {
        $portfolio = new Portfolio();

        if ($portfolio->load(Yii::$app->request->post()) && $portfolio->save()) {
            return $this->redirect(['view', 'id' => $portfolio->id]);
        }

        $brandList = $this->getBrandList();
        $modelList = $this->getModelList();
        $categoryList = $this->getCategoryList();

        return $this->render('create', [
            'portfolio' => $portfolio,
            'brandList' => $brandList,
            'modelList' => $modelList,
            'categoryList' => $categoryList,
        ]);
    }

    public function actionUpdate($id)
    {
        $portfolio = $this->findModel($id);

        if ($portfolio->load(Yii::$app->request->post()) && $portfolio->save()) {
            return $this->redirect(['view', 'id' => $portfolio->id]);
        }

        $brandList = $this->getBrandList();
        $modelList = $this->getModelList();
        $categoryList = $this->getCategoryList();

        return $this->render('update', [
            'portfolio' => $portfolio,
            'brandList' => $brandList,
            'modelList' => $modelList,
            'categoryList' => $categoryList,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Portfolio::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function getClassName()
    {
        return Portfolio::className();
    }

    protected function getCategoryList()
    {
        return ArrayHelper::map(Pcategory::find()->orderBy('title')->all(), 'slug', 'title');
    }
}
