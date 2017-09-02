<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informe')); ?>:</b>
	<?php echo CHtml::encode($data->informe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idempresa')); ?>:</b>
	<?php echo CHtml::encode($data->idempresa0->nombre);?>
	<br />


</div>