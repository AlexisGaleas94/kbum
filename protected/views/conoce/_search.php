<?php
/* @var $this ConoceController */
/* @var $model Conoce */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idconoce'); ?>
		<?php echo $form->textField($model,'idconoce'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreempresa'); ?>
		<?php echo $form->textField($model,'nombreempresa',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'objetivos'); ?>
		<?php echo $form->textField($model,'objetivos',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logotipo'); ?>
		<?php echo $form->textField($model,'logotipo',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ubicacion'); ?>
		<?php echo $form->textField($model,'ubicacion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mision'); ?>
		<?php echo $form->textField($model,'mision',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vision'); ?>
		<?php echo $form->textField($model,'vision',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fortalezas'); ?>
		<?php echo $form->textField($model,'fortalezas',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oportunidades'); ?>
		<?php echo $form->textField($model,'oportunidades',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debilidades'); ?>
		<?php echo $form->textField($model,'debilidades',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amenazas'); ?>
		<?php echo $form->textField($model,'amenazas',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_idplan'); ?>
		<?php echo $form->textField($model,'plan_idplan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->