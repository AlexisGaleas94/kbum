<?php
$this->breadcrumbs=array(
	'Empredirectors'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Empredirector','url'=>array('index')),
array('label'=>'Create Empredirector','url'=>array('create')),
array('label'=>'Update Empredirector','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Empredirector','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Desea eliminar este elemento?')),
array('label'=>'Manage Empredirector','url'=>array('admin')),
);
?>

<h1>View Empredirector #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'idempresa',
		'idusuario',
),
)); ?>
