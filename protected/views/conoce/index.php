<?php
/* @var $this ConoceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conoces',
);

$this->menu=array(
	array('label'=>'Create Conoce', 'url'=>array('create')),
	array('label'=>'Manage Conoce', 'url'=>array('admin')),
);
?>

<h1>Conoces</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
