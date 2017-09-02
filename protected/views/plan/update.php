<?php
/* @var $this PlanController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Plan'=>array('index'),
	$model->idplan=>array('view','id'=>$model->idplan),
	'Update',
);

$this->menu=array(
	array('label'=>'Mostrar Planes', 'url'=>array('index')),
	array('label'=>'Nuevo Plan', 'url'=>array('create')),
	array('label'=>'Ver Plan', 'url'=>array('view', 'id'=>$model->idplan)),
	array('label'=>'Mis Planes', 'url'=>array('admin')),
);
?>

<h1>Update Plan <?php echo $model->idplan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>