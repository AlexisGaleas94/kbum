<?php
$this->breadcrumbs=array(
	'Tests',
);

$this->menu=array(
array('label'=>'Administrar Tests','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1>Tests</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
