<?php
/* @var $this ConoceController */
/* @var $model Conoce */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conoce-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreempresa'); ?>
		<?php echo $form->textField($model,'nombreempresa',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombreempresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objetivos'); ?>
		<?php echo $form->textField($model,'objetivos',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'objetivos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logotipo'); ?>
		<?php echo $form->textField($model,'logotipo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'logotipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ubicacion'); ?>
		<?php echo $form->textField($model,'ubicacion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mision'); ?>
		<?php echo $form->textField($model,'mision',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'mision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vision'); ?>
		<?php echo $form->textField($model,'vision',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'vision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fortalezas'); ?>
		<?php echo $form->textField($model,'fortalezas',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fortalezas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oportunidades'); ?>
		<?php echo $form->textField($model,'oportunidades',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'oportunidades'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debilidades'); ?>
		<?php echo $form->textField($model,'debilidades',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'debilidades'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amenazas'); ?>
		<?php echo $form->textField($model,'amenazas',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'amenazas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plan_idplan'); ?>
		<?php echo $form->textField($model,'plan_idplan'); ?>
		<?php echo $form->error($model,'plan_idplan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->