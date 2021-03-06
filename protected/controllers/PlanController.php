<?php

class PlanController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/columnGeneral';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
				return array(
				array('allow',  // allow all users to perform 'index' and 'view' actions
					'actions'=>array('index','view'),
					'roles'=>array('admin','direct'),
				),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
					'actions'=>array('create','update'),
					'roles'=>array('admin'),
				),
				array('allow', // allow admin user to perform 'admin' and 'delete' actions
					'actions'=>array('admin','delete','create','lienzo','canvas','actualizar','update','view','conoce','unidad','leccion1','Describe'),
					'roles'=>array('admin','direct'),
				),
				array('allow',
					'actions'=>array('analisis'),
					'roles'=>array('direct'),
				),
				array('deny',  // deny all users
					'users'=>array('*'),
				),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Plan;
		//$conoce=new Conoce;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Plan']))
		{
			$model->attributes=$_POST['Plan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idplan));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Plan']))
		{
			$model->attributes=$_POST['Plan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idplan));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
		public function actionConoce($id){
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Plan']))
		{
			$model->attributes=$_POST['Plan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idplan));
		}

		$this->render('conoce',array(
			'model'=>$model,
		));
	}

	public function actionNombre(){
		$model=$this->loadModel();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		

		$this->render('nombre',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	/*mis funciones*/
	public function actionLeccion1($id){
		$describe=new DescribeForm;
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Plan']))
		{
			$model->attributes=$_POST['Plan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idplan));
		}

		$this->render('leccion1',array(
			'model'=>$model, 'describe'=>$describe,
		));
	}
	public function actionLienzo($id){
		$describe=new DescribeForm;
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Plan']))
		{
			$model->attributes=$_POST['Plan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idplan));
		}

		$this->render('lienzo',array(
			'model'=>$model, 'describe'=>$describe,
		));
	}
	public function actionCanvas($id){
		$describe=new DescribeForm;
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Plan']))
		{
			$model->attributes=$_POST['Plan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idplan));
		}

		$this->render('canvas',array(
			'model'=>$model, 'describe'=>$describe,
		));
	}
	public function actionDescribe($id){
		    $model=new Plan;
		    $describe=new Conoce;
		    $model=$this->loadModel($id);


    		if(isset($_POST['Conoce'])){
				$describe->attributes=$_POST['Conoce'];
				if($describe->save()){
					
					//$this->redirect(array('view','id'=>$model->idplan));
				}
			}

		$this->render('leccion1',array(
			'model'=>$model,'describe'=>$describe,
		));
	}
	public function actionActualizar($id,$idmodel){
		$describe=$this->loadConoce($id);
		$model=$this->loadModel($idmodel);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Conoce']))
		{
			$describe->attributes=$_POST['Conoce'];
			if($describe->save())
				$this->redirect(array('Describe','id'=>$model->idplan));
		}

		$this->render('actualizar',array(
			'describe'=>$describe,
		));
	}

	public function loadConoce($id){
		$model=Conoce::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}



	/*mis funciones*/

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Plan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}


	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Plan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Plan']))
			$model->attributes=$_GET['Plan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Plan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Plan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Plan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='plan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


}
