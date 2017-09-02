<div class="about text-center" >
	<h1>Registrate</h1>

	<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
		'id'=>'usuario-form',
		'htmlOptions'=>array('style'=>'padding: 0% 30%;'),		    
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>


		<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200,'style'=>'display:inline;')))); ?>

		<?php echo $form->textFieldGroup($model,'email',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45,'style'=>'display:inline;')))); ?>

		<?php echo $form->textFieldGroup($model,'puesto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45,'style'=>'display:inline;')))); ?>

		<?php echo $form->passwordFieldGroup($model,'password',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45,'style'=>'display:inline;')))); ?>

		<?php echo $form->passwordFieldGroup($model,'confirmar',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45,'style'=>'display:inline;')))); ?>

	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
				'buttonType'=>'submit',
				'context'=>'primary',
				'label'=>$model->isNewRecord ? 'Registrarme' : 'Registrarme',
			)); ?>
	</div>

	<?php $this->endWidget(); ?>
</<div>
