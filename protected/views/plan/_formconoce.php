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
		<?php echo $form->labelEx($model,'giro'); ?>
		<?php echo $form->textField($model,'giro',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'giro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ubicacion'); ?>
		<?php echo $form->textField($model,'ubicacion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size',array( 'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'plan_idplan',array('style'=>'visibility:hidden')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->