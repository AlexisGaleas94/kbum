<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'usuarios-form',
	'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
)); ?>

<h2>Registre sus Empleados</h2>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos. Mínimo 3 empleados, Máximo 5 empleados</p>

	<?php $this->widget('ext.appendo.JAppendo',array(
        'id' => 'Usuarios',      
        'maxRows'  =>'3',
        'wrapClass'=>'',
        'model' => $modelusuarios,
        'viewName' => 'enumerations',
        'labelDel' => 'Eliminar',
        'labelAdd' => 'Agregar',
    )); ?>

<?php $this->endWidget(); ?>
