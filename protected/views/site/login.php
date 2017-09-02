<div class="about text-center" >
	
	<h1>Iniciar Sesíon</h1>

	<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'username'); ?><br>
		<?php echo $form->textField($model,'username',array('class'=>'form-control', 'style'=>'width:30%; display:inline;' )); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password'); ?><br>
		<?php echo $form->passwordField($model,'password',array('class'=>'form-control', 'style'=>'width:30%; display:inline;' )); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="form-group rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	
	<div class="form-group">
		<?php echo CHtml::link('No tienes una cuenta? Regístrate',Array('registro')); ?>
	</div>	

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Iniciar Sesíon',array('class'=>'btn-default')); ?>
	</div>

	<?php $this->endWidget(); ?>
	</div><!-- form -->

</div>