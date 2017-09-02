<?php
/* @var $this PlanControllerController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Plans'=>array('index'),
	$model->idplan,
);

$this->menu=array(
	array('label'=>'List Plan', 'url'=>array('index')),
	array('label'=>'Create Plan', 'url'=>array('create')),
	array('label'=>'Update Plan', 'url'=>array('update', 'id'=>$model->idplan)),
	array('label'=>'Delete Plan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idplan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Plan', 'url'=>array('admin')),
);
?>

<h1>View Plan #<?php echo $model->idplan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idplan',
		'nombre',
		'fechacreacion',
		'estatus',
		'empresa_id',
	),
)); ?>
