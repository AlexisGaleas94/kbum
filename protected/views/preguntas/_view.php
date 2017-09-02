<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pregunta),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuesta')); ?>:</b>
	<?php echo CHtml::encode($data->respuesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tpre')); ?>:</b>
	<?php echo CHtml::encode($data->tpre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ttest')); ?>:</b>
	<?php echo CHtml::encode($data->ttest); ?>
	<br />

</div>