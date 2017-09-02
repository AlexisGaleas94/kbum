<?php
$this->breadcrumbs=array(
	'Puestos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
array('label'=>'Lista de Puestos','url'=>array('index'),'icon'=>'fa fa-list'),
array('label'=>'Administrar Puestos','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1>Nuevo Puesto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>