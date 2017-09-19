<?php
/* @var $this ConoceController */
/* @var $data Conoce */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idconoce')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idconoce), array('view', 'id'=>$data->idconoce)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreempresa')); ?>:</b>
	<?php echo CHtml::encode($data->nombreempresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('giro')); ?>:</b>
	<?php echo CHtml::encode($data->giro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ubicacion')); ?>:</b>
	<?php echo CHtml::encode($data->ubicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mision')); ?>:</b>
	<?php echo CHtml::encode($data->mision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vision')); ?>:</b>
	<?php echo CHtml::encode($data->vision); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fortalezas')); ?>:</b>
	<?php echo CHtml::encode($data->fortalezas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oportunidades')); ?>:</b>
	<?php echo CHtml::encode($data->oportunidades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debilidades')); ?>:</b>
	<?php echo CHtml::encode($data->debilidades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amenazas')); ?>:</b>
	<?php echo CHtml::encode($data->amenazas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_idplan')); ?>:</b>
	<?php echo CHtml::encode($data->plan_idplan); ?>
	<br />

	*/ ?>

</div>