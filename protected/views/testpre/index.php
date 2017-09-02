<?php
$this->breadcrumbs=array(
	'Testpres',
);

$this->menu=array(
array('label'=>'Create Testpre','url'=>array('create')),
array('label'=>'Manage Testpre','url'=>array('admin')),
);
?>

<h1>Testpres</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
