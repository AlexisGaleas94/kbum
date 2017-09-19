<?php
/* @var $this ConoceController */
/* @var $model Conoce */

$this->breadcrumbs=array(
	'Conoce'=>array('index'),
	$describe->idconoce=>array('view','id'=>$describe->idconoce),
	'actualizar',
);

?>

<h1>Update Conoce <?php echo $describe->idconoce; ?></h1>

<?php $this->renderPartial('_formconoce', array('model'=>$describe)); ?>