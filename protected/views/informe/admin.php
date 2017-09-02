<?php
$this->breadcrumbs=array(
	'Informes'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista de Informes','url'=>array('index'),'icon'=>'fa fa-list'),
);
?>

<h1>Administrar Informes</h1>
<?php if (Yii::app()->user->roles=="admin"): 
$this->widget('booster.widgets.TbGridView',array(
'id'=>'informe-grid',
'dataProvider'=>$model->searchadmin(),
'filter'=>$model,
'columns'=>array(
		'id',
		'informe',
		array (
			'header' => 'Empresa',
			'name' => 'idempresa',
			'value'=>'$data->idempresa0->nombre',
		),
array(
'class'=>'booster.widgets.TbButtonColumn',
'header'=>'Acciones',
'template'=>'{view} {delete}'
),
),
));
?>
	
<?php elseif(Yii::app()->user->roles=="direct"): 
$this->widget('booster.widgets.TbGridView',array(
'id'=>'informe-grid',
'dataProvider'=>$model->searchdirect(),
'filter'=>$model,
'columns'=>array(
		'id',
		'informe',
		array (
			'header' => 'Empresa',
			'name' => 'idempresa',
			'value'=>'$data->idempresa0->nombre',
		),
array(
'class'=>'booster.widgets.TbButtonColumn',
'header'=>'Acciones',
'template'=>'{view} {delete}'
),
),
));
?>

<?php else: 
echo "<h1>Accesso Denegado</h1>";
?>
	
<?php endif ?>