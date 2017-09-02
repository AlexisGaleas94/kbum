<?php
$this->breadcrumbs=array(
	'Informes',
);

$this->menu=array(
array('label'=>'Administrar Informes','url'=>array('admin'),'icon'=>'fa fa-gears'),
);
?>

<h1>Informes</h1>

<?php if (Yii::app()->user->roles=="admin"):
	$dataProvider=new CActiveDataProvider('Informe'); 

	$this->widget('booster.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	)); 

?>
	
<?php elseif(Yii::app()->user->roles=="direct"):
	$dataProvider=new CActiveDataProvider('Informe',
		array(
	    'criteria'=>array(
	    	'select'=>'*',
	        'condition'=>('idempresa = (SELECT idempresa FROM empredirector WHERE idusuario ='.Yii::app()->user->id.')'),
	        'order'=>'nombre DESC',
	    ),
	    'countCriteria'=>array(
	        'condition'=>('idempresa = (SELECT idempresa FROM empredirector WHERE idusuario ='.Yii::app()->user->id.')'),
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
