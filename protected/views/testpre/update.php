<?php
$this->breadcrumbs=array(
	'Testpres'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Testpre','url'=>array('index')),
	array('label'=>'Create Testpre','url'=>array('create')),
	array('label'=>'View Testpre','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Testpre','url'=>array('admin')),
	);
	?>

	<h1>Update Testpre <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>