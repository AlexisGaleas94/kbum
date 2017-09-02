<?php
/**
* Index de Administracion de la revista
*/
class AdministracionController extends Controller
{

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
        'actions'=>array('index','perfil'),
        'users'=>array('@'),
      ),      
      array('deny',  // deny all users
        'users'=>array('*'),
      ),
    );
  }
  
	public function actionIndex()
	{
		$this->layout='//layouts/mainadmin';
		$this->render('index');
	}

  public function actionPerfil($id)
  {
  $this->layout='//layouts/mainadmin';
  $model=$this->loadModelPerfil($id);

  $model->password = '';

  if(isset($_POST['Usuario']))
  {
    $model->attributes=$_POST['Usuario'];
    $model->password = md5($model->password);
    $model->confirmar = md5($model->confirmar);
    $model->nombre=mb_strtoupper($model->nombre,'utf-8');

    if($model->save())
      $this->redirect(array('/administracion/index'));
  }

  $this->render('update',array('model'=>$model,));
  }
  
  public function loadModelPerfil($id)
  {
  $model=Usuario::model()->findByPk($id);
  if($model===null)
  throw new CHttpException(404,'The requested page does not exist.');
  return $model;
  }
}
?>