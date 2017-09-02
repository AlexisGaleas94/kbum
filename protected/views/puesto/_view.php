<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nombre),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tusuario')); ?>:</b>
	<?php 
		if ($data->tusuario ==1) {
			echo CHtml::encode("Director"); 
		} else {
			echo CHtml::encode("Empelado"); 
		}
	?>
	<br />

</div>