
<?php
class PlandenegociosController extends Controller
{
	public $layout='//layouts/columnGeneral';
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Plandenegocios');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
					$this->render('/plan/bienvenido');


	}
	public function actionBienvenido(){
	
			$this->render('/plan/bienvenido');
		}
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionCreate()
	{
	    $model=new Plandenegocios;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['Plandenegocios']))
	    {
	        $model->attributes=$_POST['Plandenegocios'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','idplan'=>$model->idplan, 'nombreplan'=>$model->nombreplan, 'idplan'=>$model->idplan));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($idplan, $nombreplan, $idplan)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($idplan, $nombreplan, $idplan)->delete();
			}
			catch(Exception $e) 
			{
				$this->showError($e);
			}

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function actionUpdate($idplan, $nombreplan, $idplan)
	{
		$model=$this->loadModel($idplan, $nombreplan, $idplan);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Plandenegocios']))
		{
			$model->attributes=$_POST['Plandenegocios'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'idplan'=>$model->idplan, 'nombreplan'=>$model->nombreplan, 'idplan'=>$model->idplan));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new Plandenegocios('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Plandenegocios']))
			$model->attributes=$_GET['Plandenegocios'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($idplan, $nombreplan, $idplan)
	{		
		$model=$this->loadModel($idplan, $nombreplan, $idplan);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($idplan, $nombreplan, $idplan)
	{
		$model=Plandenegocios::model()->findByPk(array('idplan'=>$idplan, 'nombreplan'=>$nombreplan, 'idplan'=>$idplan));
		if($model==null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function saveModel($model)
	{
		try
		{
			$model->save();
		}
		catch(Exception $e)
		{
			$this->showError($e);
		}		
	}

	function showError(Exception $e)
	{
		if($e->getCode()==23000)
			$message = "This operation is not permitted due to an existing foreign key reference.";
		else
			$message = "Invalid operation.";
		throw new CHttpException($e->getCode(), $message);
	}		
}
