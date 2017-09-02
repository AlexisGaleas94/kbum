<table style="width: 100%;" id="<?php echo $id ?>" >
	<tbody>
    <?php if ($model->Correo == null): ?>
		<tr>
			<th style="width: 5%">Email Empleado</th>
			<td><?php echo CHtml::textField('Correo[]','',array('style'=>'width:100%','class'=>'form-control','placeholder'=>'example@example.com')); ?></td>

		</tr>
		<tr>
			<th style="width: 5%">Email Empleado</th>
			<td><?php echo CHtml::textField('Correo[]','',array('style'=>'width:100%','class'=>'form-control','placeholder'=>'example@example.com')); ?></td>
			            
		</tr>
		<tr>
			<th style="width: 5%">Email Empleado</th>
			<td><?php echo CHtml::textField('Correo[]','',array('style'=>'width:100%','class'=>'form-control','placeholder'=>'example@example.com')); ?></td>
			            
		</tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->Correo); ++$i): ?>
    		<tr>
    			<th style="width: 5%">Email Empleado</th>
    			<td><?php echo CHtml::textField('Correo[]',$model->Correo[$i],array('style'=>'width:100%','class'=>'form-control','placeholder'=>'example@example.com')); ?></td>
    		</tr>
    		<tr>
    			<th style="width: 5%">Email Empleado</th>
    			<td><?php echo CHtml::textField('Correo[]',$model->Correo[$i],array('style'=>'width:100%','class'=>'form-control','placeholder'=>'example@example.com')); ?></td>
    		</tr>
    		<tr>
    			<th style="width: 5%">Email Empleado</th>
    			<td><?php echo CHtml::textField('Correo[]',$model->Correo[$i],array('style'=>'width:100%','class'=>'form-control','placeholder'=>'example@example.com')); ?></td>
    		</tr>
        <?php endfor; ?>
		<tr>
			<th style="width: 5%">Email Empleado</th>
			<td><?php echo CHtml::textField('Correo[]','',array('style'=>'width:100%','class'=>'form-control','placeholder'=>'example@example.com','placeholder'=>'example@example.com')); ?></td>
		</tr>
		<tr>
			<th style="width: 5%">Email Empleado</th>
			<td><?php echo CHtml::textField('Correo[]','',array('style'=>'width:100%','class'=>'form-control','placeholder'=>'example@example.com')); ?></td>
		</tr>
		<tr>
			<th style="width: 5%">Email Empleado</th>
			<td><?php echo CHtml::textField('Correo[]','',array('style'=>'width:100%','class'=>'form-control','placeholder'=>'example@example.com')); ?></td>
		</tr>
    <?php endif; ?>
	</tbody>
</table>