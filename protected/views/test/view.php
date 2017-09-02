<?php
$this->breadcrumbs=array(
	'Tests'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'Lista de Test','url'=>array('index'),'icon'=>'fa fa-list'),
array('label'=>'Eliminar Test','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Desea eliminar este elemento?'),'icon'=>'fa fa-close'),
array('label'=>'Administrar Test','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1>Ver Test #<?php echo $model->id; ?></h1>

<?php 
if($model->estado == 1) {
	$model->estado="Terminado";
} 
else {
	$model->estado="Pendiente";
}

$this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		array(
			'label'=>'Empresa',
			'value'=>$model->idempresa0->nombre,
			),
		array(
			'label'=>'Usuario',
			'value'=>$model->idusuario0->nombre,
			),
		array(
			'label'=>'Estado',
			'value'=>$model->estado,					
			),
),
)); ?>
