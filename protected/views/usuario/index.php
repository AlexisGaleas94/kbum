<?php
$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
array('label'=>'Administrar Usuarios','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1>Usuarios</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
