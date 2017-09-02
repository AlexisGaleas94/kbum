<?php
$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Lista de Empresas','url'=>array('index', 'icon'=>'fa fa-list')),
	array('label'=>'Nueva Empresa','url'=>array('create'), 'icon'=>'fa fa-plus'),
	array('label'=>'Detalle Empresa','url'=>array('view','id'=>$model->id), 'icon'=>'fa fa-search'),
	array('label'=>'Administrar Empresas','url'=>array('admin'), 'icon'=>'fa fa-cogs'),);
	?>

	<h1>Actualizar <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>