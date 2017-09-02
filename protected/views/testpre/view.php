<?php
$this->breadcrumbs=array(
	'Testpres'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Testpre','url'=>array('index')),
array('label'=>'Create Testpre','url'=>array('create')),
array('label'=>'Update Testpre','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Testpre','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Testpre','url'=>array('admin')),
);
?>

<h1>View Testpre #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'idpre',
		'idtest',
		'ttest',
		'respuesta',
),
)); ?>
