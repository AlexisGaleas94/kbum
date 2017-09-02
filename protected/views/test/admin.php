<?php
$this->breadcrumbs=array(
	'Tests'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista de Test','url'=>array('index'), 'icon'=>'fa fa-list'),
);
?>

<h1>Administrar Tests</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'test-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		array (
			'header' => 'Empresa',
			'name' => 'idempresa',
			'value'=>'$data->idempresa0->nombre',
		),
		array (
			'header' => 'Usuario',
			'name' => 'idusuario',
			'value'=>'$data->idusuario0->nombre',
		),
		array (
			'header' => 'Estado',
			'type'=>'raw',
			'value'=>'($data->estado == 1) ? "<span class=\"label label-success\">Terminado</span>" : "<span class=\"label label-warning\">Pendiente</span>"',
			'filter' => CHtml::dropDownList('Test[estado]',
			$model->estado, array('1' => 'Terminado',
			'0' => 'Pendiente'), array('empty' => 'Seleccione...','class'=>'form-control'))
		),
array(
'class'=>'booster.widgets.TbButtonColumn',
'header'=>'Acciones',
'template'=>'{view} {delete}',
),
),
)); ?>
