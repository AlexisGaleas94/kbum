<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'empresa-form',
	'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos</p>

	<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($model,'giro',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($model,'razon',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($model,'ubicacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($model,'empleados',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'email',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45,'placeholder'=>'example@example.com')))); ?>

	<?php echo $form->textFieldGroup($model,'sitioweb',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45,'placeholder'=>'http://www.example.com')))); ?>

	<?php echo $form->textFieldGroup($model,'acteconomica',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($model,'telefono',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45, 'placeholder'=>'Teléfono de la empresa')))); ?>
	
	<?php echo $form->textFieldGroup($model,'anios',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<div class="row x_title"><h4>Responsable de reportes</h4></div>
	<?php echo $form->textFieldGroup($model,'njefe',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($model,'emailjefe',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100,'placeholder'=>'example@example.com')))); ?>
	<div class="row x_title"></div>
	

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
