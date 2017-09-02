<?php
/* @var $this PlanController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Plan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Mostrar Planes', 'url'=>array('index')),
	array('label'=>'Mis Planes', 'url'=>array('admin')),
);
?>

<h1>Crea tu plan de negocios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>