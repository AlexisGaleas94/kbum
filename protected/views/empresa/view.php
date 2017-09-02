<?php
$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->nombre,
);

$this->menu=array(
array('label'=>'Lista de Empresas','url'=>array('index'),'icon'=>'fa fa-list'),
array('label'=>'Nueva Empresa','url'=>array('create'),'icon'=>'fa fa-plus'),
array('label'=>'Actualizar Empresa','url'=>array('update','id'=>$model->id),'icon'=>'fa fa-refresh'),
array('label'=>'Eliminar Empresa','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Desea eliminar este elemento?'),'icon'=>'fa fa-close'),
array('label'=>'Administrar Empresas','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1><?php echo $model->nombre;?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'folio',
		'nombre',
		'empleados',
		'giro',
		'razon',
		'ubicacion',
		'email',
		'sitioweb',
		'acteconomica',
		'telefono',
		'njefe',
		'emailjefe',
		'anios',
),
)); ?>
