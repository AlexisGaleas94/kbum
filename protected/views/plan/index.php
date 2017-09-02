
<?php
/* @var $this PlanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plan',
);

$this->menu=array(
	array('label'=>'Nuevo plan', 'url'=>array('create')),
	array('label'=>'Mis Planes', 'url'=>array('admin')),
);
?>



<div class="row">

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>



