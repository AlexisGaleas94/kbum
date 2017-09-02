<?php
$this->breadcrumbs=array(
	'Informes'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Informe','url'=>array('index')),
array('label'=>'Create Informe','url'=>array('create')),
array('label'=>'Update Informe','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Informe','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Desea eliminar este elemento?')),
array('label'=>'Manage Informe','url'=>array('admin')),
);
?>

<h1>View Informe #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'informe',
		'idempresa',
),
)); ?>
