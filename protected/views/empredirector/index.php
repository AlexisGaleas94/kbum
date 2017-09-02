<?php
$this->breadcrumbs=array(
	'Empredirectors',
);

$this->menu=array(
array('label'=>'Create Empredirector','url'=>array('create')),
array('label'=>'Manage Empredirector','url'=>array('admin')),
);
?>

<h1>Empredirectors</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
