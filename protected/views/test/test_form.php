<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
)); ?>
<br>
<br>
<p class="help-block">Los campos con <span class="required">*</span> son requeridos</p>


<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Preguntas</th>
      <th>Prespuestas</th>
    </tr>
  </thead>

  <tbody>
  	<?php 
  		if (Yii::app()->user->roles=="direct") {
  			$sql = 'SELECT * FROM preguntas WHERE tpre ="test directivo" and ttest ="test legal"';

		   	$rawdata = Yii::app()->db->createCommand($sql)->queryAll();
		   	$num=1;
			foreach ($rawdata as $id) 
		    {	
		    	$name = $id['id'];
		    	echo 
		    		"<tr>
				      	<th scope=\"row\">".$num."</th>
				      	<td>".$id['pregunta']."</td>
				      	<td>
				      		<label><input type=\"radio\" name=\"".$name."\" value=\"si\"><span>Si</span></label>
							<label><input type=\"radio\" name=\"".$name."\" value=\"no\"><span>No</span></label>
			      		</td>
				    </tr>";
			    $num++;	
		    }
  			
  		} 
  		elseif(Yii::app()->user->roles=="emple") {
  			$sql = 'SELECT * FROM preguntas WHERE tpre ="test empleado" and ttest ="test legal"';

		   	$rawdata = Yii::app()->db->createCommand($sql)->queryAll();
		   	$num=1;
			foreach ($rawdata as $id) 
		    {
		    	echo 
		    		"<tr>
				      	<th scope=\"row\">".$num."</th>
				    	<td>".$id['pregunta']."</td>
				     	<td>
					      	<label><input type=\"radio\" name=\"p1\" value=\"si\"><span>Si</span></label>
							<label><input type=\"radio\" name=\"p1\" value=\"no\"><span>No</span></label>
				      	</td>
				    </tr>";
			    $num++;	
		    }  			
  		}
  		else{
  			echo "<h1>Sin Acceso</h1>";
  		}	    	
	?>
  </tbody>

</table>

<?php $this->endWidget(); ?>
