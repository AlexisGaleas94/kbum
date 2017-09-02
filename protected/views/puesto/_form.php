<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'puesto-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos</p>

	<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

	<?php echo $form->dropDownListGroup($model,'tusuario', array('widgetOptions'=>array('data'=>array(""=>"Selecciona opción...","1"=>"Directivo","0"=>"Empleado"), 'htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Nuevo' : 'Actualiar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
