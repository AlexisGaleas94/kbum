<?php
$this->breadcrumbs=array(
	'Preguntas'=>array('index'),
	'Nueva',
);

$this->menu=array(
array('label'=>'Lista de Preguntas','url'=>array('index'),'icon'=>'fa fa-list'),
array('label'=>'Administrar Preguntas','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1>Nueva Pregunta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>