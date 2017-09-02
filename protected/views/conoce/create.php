<?php
/* @var $this ConoceController */
/* @var $model Conoce */

$this->breadcrumbs=array(
	'Conoces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Conoce', 'url'=>array('index')),
	array('label'=>'Manage Conoce', 'url'=>array('admin')),
);
?>

<h1>Create Conoce</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>