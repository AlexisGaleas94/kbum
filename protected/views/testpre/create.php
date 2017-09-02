<?php
$this->breadcrumbs=array(
	'Testpres'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Testpre','url'=>array('index')),
array('label'=>'Manage Testpre','url'=>array('admin')),
);
?>

<h1>Create Testpre</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>