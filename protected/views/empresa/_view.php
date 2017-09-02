<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('folio')); ?>:</b>
	<?php echo CHtml::link(CHtml::decode($data->folio .'<i class="fa fa-search"></i>'),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('njefe')); ?>:</b>
	<?php echo CHtml::encode($data->njefe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailjefe')); ?>:</b>
	<?php echo CHtml::encode($data->emailjefe); ?>
	<br />
</div>