<?php
$this->breadcrumbs=array(
	'Preguntases'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista de Preguntas','url'=>array('index'),'icon'=>'fa fa-list'),
array('label'=>'Nueva Pregunta','url'=>array('create'),'icon'=>'fa fa-plus'),
);
?>

<h1>Administrar Preguntas</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'preguntas-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'pregunta',
		'respuesta',
		'tpre',
		'ttest',
array(
'class'=>'booster.widgets.TbButtonColumn',
'header'=>'Acciones',
),
),
)); ?>
