<?php
$this->breadcrumbs=array(
	'Preguntas',
);

$this->menu=array(
array('label'=>'Administrar Preguntas','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1>Preguntas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
