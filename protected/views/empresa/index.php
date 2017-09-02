<?php
$this->breadcrumbs=array(
	'Empresas',
);

$this->menu=array(
array('label'=>'Nueva Empresa','url'=>array('create'),'icon'=>'fa fa-plus'),
array('label'=>'Administrar Empresas','url'=>array('admin'),'icon'=>'fa fa-cogs'),
);
?>

<h1>Empresas</h1>


<?php if (Yii::app()->user->roles=="admin"):
	$dataProvider=new CActiveDataProvider('Empresa'); 

	$this->widget('booster.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	)); 

?>
	
<?php elseif(Yii::app()->user->roles=="direct"):
	$dataProvider=new CActiveDataProvider('Empresa',
		array(
	    'criteria'=>array(
	    	'select'=>'*',
	        'condition'=>('id in(select idempresa FROM empredirector WHERE idusuario = '.Yii::app()->user->id.')'),
	        'order'=>'nombre DESC',
	    ),
	    'countCriteria'=>array(
	        'condition'=>('id in(select idempresa FROM empredirector WHERE idusuario = '.Yii::app()->user->id.')'),
	    ),
	    'pagination'=>array(
	        'pageSize'=>20,
	    ),
	)); 
	

	$this->widget('booster.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	));
?>

<?php else: echo "<h1>Accesso Denegado</h1>";?>
	
<?php endif ?>