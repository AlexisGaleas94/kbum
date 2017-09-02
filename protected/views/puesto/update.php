<?php
$this->breadcrumbs=array(
	'Puestos'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Lista de Puestos','url'=>array('index'),'icon'=>'fa fa-list'),
	array('label'=>'Nuevo Puesto','url'=>array('create'),'icon'=>'fa fa-plus'),
	array('label'=>'Ver Puesto','url'=>array('view','id'=>$model->id),'icon'=>'fa fa-search'),
	array('label'=>'Administrar Puestos','url'=>array('admin'),'icon'=>'fa fa-cogs'),
	);
	?>

	<h1>Actualizar Puesto <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>