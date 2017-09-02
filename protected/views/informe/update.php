<?php
$this->breadcrumbs=array(
	'Informes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Informe','url'=>array('index')),
	array('label'=>'Create Informe','url'=>array('create')),
	array('label'=>'View Informe','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Informe','url'=>array('admin')),
	);
	?>

	<h1>Update Informe <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>