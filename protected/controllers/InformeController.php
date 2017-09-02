<?php

class InformeController extends Controller
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
'actions'=>array('index','view','admin',),
'roles'=>array('direct','admin'),
),
/*array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('create','update'),
'users'=>array('@'),
),*/
array('allow', // allow admin user to perform 'admin' and 'delete' actions
'actions'=>array('delete'),
'roles'=>array('admin'),
),
array('deny',  // deny all users
'users'=>array('*'),
),
);
}

public function actionView($id)
{
$this->render('view',array(
'model'=>$this->loadModel($id),
));
}

public function actionCreate()
{

$model=new Informe;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Informe']))
{
$model->attributes=$_POST['Informe'];
if($model->save())
$this->redirect(array('view','id'=>$model->id));
}

$this->render('create',array(
'model'=>$model,
));
}

public function actionUpdate($id)
{
$model=$this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Informe']))
{
$model->attributes=$_POST['Informe'];
if($model->save())
$this->redirect(array('view','id'=>$model->id));
}

$this->render('update',array(
'model'=>$model,
));
}

public function actionDelete($id)
{
if(Yii::app()->request->isPostRequest)
{
// we only allow deletion via POST request
$this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
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
		$model=new Informe('searchadmin');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Informe']))
		$model->attributes=$_GET['Informe'];

		$this->render('admin',array(
		'model'=>$model,
		));
	}
	elseif (Yii::app()->user->roles=="direct") {
		$model=new Informe('searchdirect');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Informe']))
		$model->attributes=$_GET['Informe'];

		$this->render('admin',array(
		'model'=>$model,
		));
	}
	else{
			echo "<h1>Accesso Denegado</h1>";
		}
}

public function loadModel($id)
{
$model=Informe::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}

protected function performAjaxValidation($model)
{
if(isset($_POST['ajax']) && $_POST['ajax']==='informe-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}
}
