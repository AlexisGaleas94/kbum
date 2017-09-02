<?php
$this->breadcrumbs=array(
	'Puestos'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista de Puesto','url'=>array('index'), 'icon'=>'fa fa-list'),
array('label'=>'Nuevo Puesto','url'=>array('create'), 'icon'=>'fa fa-plus'),
);
?>

<h1>Administrar Puestos</h1>

<?php 

$this->widget('booster.widgets.TbGridView',array(
'id'=>'puesto-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'nombre',
		array (
			'header' => 'Tipo de Puesto',
			'value'=>'($data->tusuario == 1) ? "Directivo" : "Empleado"',
			'filter' => CHtml::dropDownList('Puesto[tusuario]',
			$model->tusuario, array('1' => 'Directivo',
			'0' => 'Empleado'), array('empty' => 'Seleccione...','class'=>'form-control'))
		),
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
