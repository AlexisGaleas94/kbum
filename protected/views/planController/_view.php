<?php
/* @var $this PlanControllerController */
/* @var $data Plan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idplan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idplan), array('view', 'id'=>$data->idplan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechacreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estatus')); ?>:</b>
	<?php echo CHtml::encode($data->estatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_id')); ?>:</b>
	<?php echo CHtml::encode($data->empresa_id); ?>
	<br />


</div>