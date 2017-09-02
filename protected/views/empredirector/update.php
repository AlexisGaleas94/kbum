<?php
$this->breadcrumbs=array(
	'Empredirectors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Empredirector','url'=>array('index')),
	array('label'=>'Create Empredirector','url'=>array('create')),
	array('label'=>'View Empredirector','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Empredirector','url'=>array('admin')),
	);
	?>

	<h1>Update Empredirector <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>