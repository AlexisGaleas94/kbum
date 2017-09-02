<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpre')); ?>:</b>
	<?php echo CHtml::encode($data->idpre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtest')); ?>:</b>
	<?php echo CHtml::encode($data->idtest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ttest')); ?>:</b>
	<?php echo CHtml::encode($data->ttest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuesta')); ?>:</b>
	<?php echo CHtml::encode($data->respuesta); ?>
	<br />


</div>