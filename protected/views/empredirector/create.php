<?php
$this->breadcrumbs=array(
	'Empredirectors'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Empredirector','url'=>array('index')),
array('label'=>'Manage Empredirector','url'=>array('admin')),
);
?>

<h1>Create Empredirector</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>