<?php
$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	'Nueva Empresa',
);

$this->menu=array(
array('label'=>'Lista de Empresas','url'=>array('index'),'icon'=>'fa fa-list'),
array('label'=>'Administrar Empresas','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1>Nueva Empresa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>