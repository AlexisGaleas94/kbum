<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::link(CHtml::decode($data->nombre .'<i class="fa fa-search"></i>'),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puesto')); ?>:</b>
	<?php echo CHtml::encode($data->puesto); ?>
	<br />
</div>