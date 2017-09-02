<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Nuevo',
);

$this->menu=array(
array('label'=>'Lista de Usuarios','url'=>array('index'),'icon'=>'fa fa-list'),
array('label'=>'Administrar Usuarios','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1>Nuevo Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>