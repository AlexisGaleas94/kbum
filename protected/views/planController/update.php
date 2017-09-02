<?php
/* @var $this PlanControllerController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Plans'=>array('index'),
	$model->idplan=>array('view','id'=>$model->idplan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Plan', 'url'=>array('index')),
	array('label'=>'Create Plan', 'url'=>array('create')),
	array('label'=>'View Plan', 'url'=>array('view', 'id'=>$model->idplan)),
	array('label'=>'Manage Plan', 'url'=>array('admin')),
);
?>

<h1>Update Plan <?php echo $model->idplan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>