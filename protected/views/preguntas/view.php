<?php
$this->breadcrumbs=array(
	'Preguntas'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'Lista de Preguntas','url'=>array('index'),'icon'=>'fa fa-list'),
array('label'=>'Nueva Pregunta','url'=>array('create'),'icon'=>'fa fa-plus'),
array('label'=>'Actualizar Pregunta','url'=>array('update','id'=>$model->id),'icon'=>'fa fa-refresh'),
array('label'=>'Eliminar Pregunta','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Desea eliminar este elemento?'),'icon'=>'fa fa-close'),
array('label'=>'Administrar Preguntas','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1>Ver Pregunta #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'pregunta',
		'respuesta',
		'tpre',
		'ttest',
),
)); ?>
