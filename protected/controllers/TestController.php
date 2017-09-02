<?php

class TestController extends Controller
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
'roles'=>array('admin','direct'),
),
array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('create','update'),
'roles'=>array('admin'),
),
array('allow', // allow admin user to perform 'admin' and 'delete' actions
'actions'=>array('admin','delete'),
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

public function actionView($id)
{
$this->render('view',array(
'model'=>$this->loadModel($id),
));
}

public function actionCreate()
{
$model=new Test;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Test']))
{
$model->attributes=$_POST['Test'];
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

if(isset($_POST['Test']))
{
$model->attributes=$_POST['Test'];
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
$dataProvider=new CActiveDataProvider('Test');
$this->render('index',array(
'dataProvider'=>$dataProvider,
));
}

public function actionAdmin()
{
$model=new Test('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Test']))
$model->attributes=$_GET['Test'];

$this->render('admin',array(
'model'=>$model,
));
}

public function loadModel($id)
{
$model=Test::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}

protected function performAjaxValidation($model)
{
	if(isset($_POST['ajax']) && $_POST['ajax']==='test-form')
	{
		echo CActiveForm::validate($model);
		Yii::app()->end();
	}
}

public function actionAnalisis()
{
	$modeltest=new Test;
	$modelusuarios=new TestusuariosForm;
	$modelempresa= new Empresa;

	if(isset($_POST['Test']))
	{
		$model->attributes=$_POST['Test'];
		if($model->save())
		$this->redirect(array('view','id'=>$model->id));
	}

	$this->render('analisis',array('modelempresa'=>$modelempresa,'modeltest'=>$modeltest, 'modelusuarios'=>$modelusuarios));
}
}