<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista de Usuarios','url'=>array('index'),'icon'=>'fa fa-list'),
);

?>

<h1>Administrar Usuarios</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'usuario-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		//'id',
		'nombre',
		'email',
		'puesto',
		//'password',
		//'status',
		'roles',
array(
'class'=>'booster.widgets.TbButtonColumn',
'header'=>'Acciones',
'template' => '{view} {delete}',
),
),
)); ?>
