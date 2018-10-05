<?php

namespace backend\controllers;

use Yii;
use common\models\PriceDate;
use common\models\Products;
use common\models\PriceDateSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PricedateController implements the CRUD actions for PriceDate model.
 */
class PricedateController extends Controller
{
    /**
     * @inheritdoc
     */
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

    /**
     * Lists all PriceDate models.
     * @return mixed
     */
    public function actionIndex()
    {	
	

	$request = Yii::$app->request;
	$get = $request->get(); 
	$prod = $request->get('product'); 
	
	$product = Products::find()
    ->where(['id' => $prod ])
    ->one();
		
		
        $searchModel = new PriceDateSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'product' => $product,
        ]);
    }

    /**
     * Displays a single PriceDate model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PriceDate model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		
	$request = Yii::$app->request;
	$get = $request->get(); 
	$prod = $request->get('product'); 
	
	$product = Products::find()
    ->where(['id' => $prod ])
    ->one();
		
		
		$model = new PriceDate();
        if ($model->load(Yii::$app->request->post()) ) {
			
		$model->id_product = $prod;		
		
		$model->date_start =  strtotime($model->date_start);  
		$model->date_start = trim($model->date_start);     
		$model->date_end =  strtotime($model->date_end); 
		$model->date_end = trim($model->date_end);     
		  
		if($model->save()){  }else{   print_r ($model->getErrors());   }
		
		return $this->redirect(['index', 'product' => $prod]);
		       
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PriceDate model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_price_date]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PriceDate model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
	$request = Yii::$app->request;
	$get = $request->get(); 
	$prod = $request->get('product'); 
    $this->findModel($id)->delete();
		
        return $this->redirect(['index', 'product' => $prod]);
    }

    /**
     * Finds the PriceDate model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PriceDate the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PriceDate::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
