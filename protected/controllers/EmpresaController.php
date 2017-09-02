<?php

class EmpresaController extends Controller
{
	public $layout='//layouts/column2admin';

	public function filters()
	{
		return array(
		'accessControl', // perform access control for CRUD operations
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
			'actions'=>array('index','view'),
			'roles'=>array('direct','admin'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
			'actions'=>array('create','update'),
			'roles'=>array('direct','admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
			'actions'=>array('admin','delete'),
			'roles'=>array('direct','admin'),
			),
			array('deny',  // deny all users
			'users'=>array('*'),
			),
		);
	}

	public function actionView($id)
	{		
		if (empty($id)) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		else{
			if (Yii::app()->user->roles =="admin") {
				$this->render('view',array('model'=>$this->loadModeladmin($id),));	
			}
			elseif (Yii::app()->user->roles =="direct") {
				$this->render('view',array('model'=>$this->loadModeldirect($id),));
			}
		}
	}

	public function actionCreate()
	{
		$model=new Empresa;
		$modelempredirect = new Empredirector;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Empresa']))
		{
			$model->attributes=$_POST['Empresa'];
			$model->folio=crypt($model->nombre,'salt');
			if($model->save())
				$modelempredirect->idempresa=$model->id;
				$modelempredirect->idusuario=Yii::app()->user->id;
				if($modelempredirect->save())
					$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array('model'=>$model,));
	}

	public function actionUpdate($id)
	{
		if (empty($id)) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		else{
			if (Yii::app()->user->roles =="admin") {
				$model=$this->loadModeladmin($id);

				// Uncomment the following line if AJAX validation is needed
				// $this->performAjaxValidation($model);

				if(isset($_POST['Empresa']))
				{
				$model->attributes=$_POST['Empresa'];
				if($model->save())
				$this->redirect(array('view','id'=>$model->id));
				}

				$this->render('update',array('model'=>$model,));
			}
			elseif (Yii::app()->user->roles =="direct") {
				$model=$this->loadModeldirect($id);

				// Uncomment the following line if AJAX validation is needed
				// $this->performAjaxValidation($model);

				if(isset($_POST['Empresa']))
				{
				$model->attributes=$_POST['Empresa'];
				if($model->save())
				$this->redirect(array('view','id'=>$model->id));
				}

				$this->render('update',array('model'=>$model,));
			}
		}	
	}

	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			if (Yii::app()->user->roles =="admin") {
				// we only allow deletion via POST request
				$this->loadModeladmin($id)->delete();

				// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
				if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}
			elseif (Yii::app()->user->roles =="direct") {
				// we only allow deletion via POST request
				$this->loadModeldirect($id)->delete();

				// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
				if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}		
		}
		else
		throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}


	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAdmin()
	{
		if (Yii::app()->user->roles=="admin") {
			$model=new Empresa('searchadmin');
			$model->unsetAttributes();  // clear any default values

			if(isset($_GET['Empresa']))
				$model->attributes=$_GET['Empresa'];

			$this->render('admin',array('model'=>$model,));		
		} 
		elseif(Yii::app()->user->roles=="direct"){
			$model=new Empresa('searchdirect');
			$model->unsetAttributes();  // clear any default values

			if(isset($_GET['Empresa']))
				$model->attributes=$_GET['Empresa'];

			$this->render('admin',array('model'=>$model,));
		}
		else{
			echo "<h1>Accesso Denegado</h1>";
		}
	}

	public function loadModel($id)
	{
		$model=Empresa::model()->findByPk($id);

		if($model===null)
		throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadModeladmin($id)
	{
		$model=Empresa::model()->findByPk($id);
		if($model===null)
		throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadModeldirect($id)
	{	
		$model=Empresa::model()->findByPk($id);

		if ($model!=null) {
			$model1=Empredirector::model()->find('idempresa=:id',array(':id'=>$id));

			if ($model1->idusuario == Yii::app()->user->id) {
				return $model;
			}
			else{
				throw new CHttpException(404,'The requested page does not exist.');
			}		
		}
		else{
			throw new CHttpException(404,'The requested page does not exist.');
		}
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='empresa-form')
		{
		echo CActiveForm::validate($model);
		Yii::app()->end();
		}
	}
}
