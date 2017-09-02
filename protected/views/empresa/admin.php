<?php
$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista de Empresas','url'=>array('index'),'icon'=>'fa fa-list'),
array('label'=>'Nueva Empresa','url'=>array('create'),'icon'=>'fa fa-building'),
);
?>

<h3>Administrar Empresas</h3>

<?php if (Yii::app()->user->roles=="admin"): 
	$this->widget('booster.widgets.TbGridView',array(
		'id'=>'empresa-grid',
		'dataProvider'=>$model->searchadmin(),
		'filter'=>$model,
		'summaryText'=>'Ver Resultados {start} al {end} de {count} Elementos.',
		'columns'=>array(
				//'id',
				'folio',
				'nombre',
				//'empleados',
				'giro',
				'razon',		
				//'ubicacion',
				//'email',
				//'sitioweb',
				'acteconomica',
				//'telefono',
				'njefe',
				//'emailjefe',
				//'anios',
				
		array(
		'class'=>'booster.widgets.TbButtonColumn',
		'header'=>'Acciones',
		),
		),
	));
?>
	
<?php elseif(Yii::app()->user->roles=="direct"): 
	$this->widget('booster.widgets.TbGridView',array(
		'id'=>'empresa-grid',
		'dataProvider'=>$model->searchdirect(),
		'filter'=>$model,
		'summaryText'=>'Ver Resultados {start} al {end} de {count} Elementos.',
		'columns'=>array(
				//'id',
				'folio',
				'nombre',
				//'empleados',
				'giro',
				'razon',		
				//'ubicacion',
				//'email',
				//'sitioweb',
				'acteconomica',
				//'telefono',
				'njefe',
				//'emailjefe',
				//'anios',
				
		array(
		'class'=>'booster.widgets.TbButtonColumn',
		'header'=>'Acciones',
		),
		),
	));
?>

<?php else: echo "<h1>Accesso Denegado</h1>";?>	
	
<?php endif ?>