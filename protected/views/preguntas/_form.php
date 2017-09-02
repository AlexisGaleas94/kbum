<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'preguntas-form',
	'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos</p>

	<?php echo $form->textFieldGroup($model,'pregunta',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($model,'respuesta',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->dropDownListGroup($model,'tpre', array('widgetOptions'=>array('data'=>array(""=>"Selecciona opción...","Test Directivo"=>"Test Directivo","Test Empleado"=>"Test Empleado"), 'htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

	<?php echo $form->dropDownListGroup($model,'ttest', array('widgetOptions'=>array('data'=>array(""=>"Selecciona opción...","Test Legal"=>"Test Legal","Test Organizacional"=>"Test Organizacional", "Test Tecnología"=>"Test Tecnología","Test Finanzas"=>"Test Finanzas","Test Mercadotecnia"=>"Test Mercadotecnia"), 'htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
