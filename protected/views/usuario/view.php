<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->nombre,
);

$this->menu=array(
array('label'=>'Lista de Usuarios','url'=>array('index'), 'icon'=>'fa fa-list'),
array('label'=>'Eliminar Usuario','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Desea eliminar este elemento?'),'icon'=>'fa fa-close'),
array('label'=>'Administrar Usuarios','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1><?php echo $model->nombre; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'nombre',
		'email',
		'puesto',
),
)); ?>
