<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'empresa-form',
	'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
)); ?>

<h2>Registre su Empresa</h2>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos</p>

	<?php echo $form->textFieldGroup($modelempresa,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($modelempresa,'giro',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($modelempresa,'razon',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($modelempresa,'ubicacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($modelempresa,'empleados',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($modelempresa,'email',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45,'placeholder'=>'example@example.com')))); ?>

	<?php echo $form->textFieldGroup($modelempresa,'sitioweb',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45,'placeholder'=>'http://www.example.com')))); ?>

	<?php echo $form->textFieldGroup($modelempresa,'acteconomica',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($modelempresa,'telefono',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45, 'placeholder'=>'Teléfono de la empresa')))); ?>
	
	<?php echo $form->textFieldGroup($modelempresa,'anios',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<div class="row x_title"><h4>Responsable de reportes</h4></div>
	<?php echo $form->textFieldGroup($modelempresa,'njefe',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($modelempresa,'emailjefe',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100,'placeholder'=>'example@example.com')))); ?>
	<div class="row x_title"></div>


<?php $this->endWidget(); ?>
