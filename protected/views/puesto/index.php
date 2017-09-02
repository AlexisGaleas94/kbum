<?php
$this->breadcrumbs=array(
	'Puestos',
);

$this->menu=array(
array('label'=>'Nuevo Puesto','url'=>array('create'),'icon'=>'fa fa-plus'),
array('label'=>'Administrar Puestos','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1>Puestos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
