<?php
$this->breadcrumbs=array(
	'Administración'=>array('index'),
	'Actualizar Datos',
);
?>

<h3>Actualizar Datos <?php echo $model->nombre; ?></h3>

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'usuario-form',
	'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos</p>

	<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($model,'email',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

	<?php echo $form->textFieldGroup($model,'puesto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

	<?php echo $form->passwordFieldGroup($model,'password',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>
	
	<?php echo $form->passwordFieldGroup($model,'confirmar',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45,'style'=>'display:inline;')))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Nuevo' : 'Actualizar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
