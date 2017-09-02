<?php
/* @var $this ConoceController */
/* @var $model Conoce */

$this->breadcrumbs=array(
	'Conoces'=>array('index'),
	$model->idconoce=>array('view','id'=>$model->idconoce),
	'Update',
);

$this->menu=array(
	array('label'=>'List Conoce', 'url'=>array('index')),
	array('label'=>'Create Conoce', 'url'=>array('create')),
	array('label'=>'View Conoce', 'url'=>array('view', 'id'=>$model->idconoce)),
	array('label'=>'Manage Conoce', 'url'=>array('admin')),
);
?>

<h1>Update Conoce <?php echo $model->idconoce; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>