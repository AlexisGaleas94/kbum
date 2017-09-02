<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa')); ?>:</b>
	<?php echo CHtml::encode($data->idempresa0->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->idusuario0->nombre); ?>
	<br />

	<b>Puesto</b>
	<?php 
		if ($data->idusuario0->roles =="direct" ) {
			echo CHtml::encode("Director");
		} 
		elseif($data->idusuario0->roles =="admin" ) {
			echo CHtml::encode("Administrador");
		} 
		else{
			echo CHtml::encode("Empleado");
		}	
	 ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php 
		if ($data->estado ==1 ) {
			echo CHtml::encode("Terminado");
		} 
		else{
			echo CHtml::encode("Pendiente");
		}
	?>
	<br />


</div>