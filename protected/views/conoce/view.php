<?php
/* @var $this ConoceController */
/* @var $model Conoce */

$this->breadcrumbs=array(
	'Conoces'=>array('index'),
	$model->idconoce,
);

$this->menu=array(
	array('label'=>'List Conoce', 'url'=>array('index')),
	array('label'=>'Create Conoce', 'url'=>array('create')),
	array('label'=>'Update Conoce', 'url'=>array('update', 'id'=>$model->idconoce)),
	array('label'=>'Delete Conoce', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idconoce),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Conoce', 'url'=>array('admin')),
);
?>

<h1>View Conoce #<?php echo $model->idconoce; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idconoce',
		'nombreempresa',
		'objetivos',
		'logotipo',
		'tipo',
		'ubicacion',
		'size',
		'mision',
		'vision',
		'fortalezas',
		'oportunidades',
		'debilidades',
		'amenazas',
		'plan_idplan',
	),
)); ?>
