<?php
$this->breadcrumbs=array(
	'Preguntases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Lista de Preguntas','url'=>array('index'),'icon'=>'fa fa-list'),
	array('label'=>'Administrar Preguntas','url'=>array('admin'),'icon'=>'fa fa-cogs'),
	array('label'=>'Nueva Pregunta','url'=>array('create'),'icon'=>'fa fa-plus'),
	array('label'=>'Ver Pregunta','url'=>array('view','id'=>$model->id),'icon'=>'fa fa-search'),
	);
	?>

	<h1>Update Preguntas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>