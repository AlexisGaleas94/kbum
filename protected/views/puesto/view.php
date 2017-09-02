<?php
$this->breadcrumbs=array(
	'Puestos'=>array('index'),
	$model->nombre,
);

$this->menu=array(
array('label'=>'Lista de Puestos','url'=>array('index'),'icon'=>'fa fa-list'),
array('label'=>'Nuevo Puesto','url'=>array('create'),'icon'=>'fa fa-plus'),
array('label'=>'Actualizar Puesto','url'=>array('update','id'=>$model->id),'icon'=>'fa fa-refresh'),
array('label'=>'Eliminar Puesto','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Desea eliminar este elemento?'),'icon'=>'fa fa-close'),
array('label'=>'Administrar Puesto','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1>Ver Puesto <?php echo $model->nombre; ?></h1>

<?php 
if ($model->tusuario ==1) {
	$model->tusuario = "Director";
} else {
	$model->tusuario = "Empleado";
}

$this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'nombre',
		'tusuario',
),
)); ?>
