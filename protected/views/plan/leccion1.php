<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<h1>Leccion 1: Describe tu empresa</h1>
<div class="row">
	<br>
	<div class="col-md-6">
	<?php
	$sql = 'SELECT * FROM conoce WHERE plan_idplan="'.$model->idplan.'"';
	$rawdata = Yii::app()->db->createCommand($sql)->queryAll();
	if($rawdata!=null){
		echo "<h2>Tu Información Actual</h2>";
		foreach ($rawdata as $id) 
		    {	
				$this->menu=array(
  					array('label'=>'Actualizar Información', 
  					'url'=>array('actualizar', 'id'=>$id["idconoce"], 'idmodel'=>$model->idplan)),
				);
				echo"<h4><b>Nombre Empresa: </b>".$id["idconoce"]."</h4>";

				echo"<h4><b>Nombre Empresa: </b>".$id["nombreempresa"]."</h4>";
				echo"<h4><b>Giro Empresarial: </b>".$id["giro"]."</h4>";
				echo"<h4><b>Ubicacion: </b>".$id["ubicacion"]."</h4>";
				echo"<h4><b>Tamaño: </b>".$id["size"]."</h4>";



		    } 



	}else{
echo "<div class='form'>";
 $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conoce-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

	echo "<p class='note'>Fields with <span class='required'>*</span> are required.</p>";

	echo $form->errorSummary($describe); 

	echo "<div class='row'>";
		 echo $form->labelEx($describe,'Nombre empresa: '); 
		 echo $form->textField($describe,'nombreempresa',array( 'size'=>60,'maxlength'=>200,
		 													    'class'=>'form-control',
		 													    'placeholder'=>'Nombre Empresa')); 
		 echo $form->error($describe,'nombreempresa'); 
	echo "</div>";

	echo "<div class='row'>";
		echo $form->labelEx($describe,'Giro: '); 
		echo $form->dropDownList($describe,'giro',array('Manufactura'=>'Manufactura','Otro'=>'Otro'), 
																	array('class'=>'form-control'));

	echo "</div>";

	echo "<div class='row'>";
		 echo $form->labelEx($describe,'Dirección: '); 
		 echo $form->textField($describe,'ubicacion',array('size'=>60,'maxlength'=>200,
		 													'class'=>'form-control',
		 													'placeholder'=>'Ubicación')); 
		 echo $form->error($describe,'ubicacion'); 
	echo "</div>";

	echo "<div class='row'>";
		echo $form->labelEx($describe,'Tamaño'); 
		echo $form->dropDownList($describe,'size',array('Micro'=>'Micro','Pequeña'=>'Pequeña'), 
												  array('class'=>'form-control'));		 
		echo $form->error($describe,'size'); 
	echo "</div>";

	echo "<div class='row'>";
		 echo $form->labelEx($describe,'plan_idplan'); 
		 echo $form->textField($describe,'plan_idplan',array('class'=>'form-control'));
		 echo $form->error($describe,'plan_idplan');
	echo "</div>";

	echo "<div class='row buttons'>";
		 echo CHtml::submitButton($describe->isNewRecord ? 'Create' : 'Save'); 
	echo "</div>";

 $this->endWidget();
	echo "</div>";
	}

	?>



	<!--<form action="datosprimarios">
		<a href="#" data-toggle="tooltip" data-placement="right" title="Razon social de tu empresa">
			<label>Nombre empresa</label>
		</a>
		<input class="form-control"  type="text" placeholder="Nombre Empresa">
		<br>
	<label>Giro</label>
		<select class="form-control" placeholder="Giro">
			<option>Comercial</option>
			<option>Industrial</option>
		</select>
		<br>
	<label>Ubicación</label>
		<input class="form-control" type="text" placeholder="Ubicación">
		<br>
	<label>Tamaño</label>
		<select class="form-control" placeholder="Tamaño">
			<option>Micro</option>
			<option>Pequeña</option>
			<option>Mediana</option>

		</select>
	<br>
	<input type="submit" class="btn btn-success" placeholder="Agregar">
	</form>!-->


</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
