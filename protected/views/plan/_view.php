<?php
/* @var $this PlanController */
/* @var $data Plan */
?>
<div class="col-sm-4">

<a href=<?php echo CHtml::encode($data->idplan); ?> >

     <div>
        	<div >
       	 		<div class="icon"><i class="fa fa-globe"></i>
         		</div>
         		<div class="count"><b>Nombre: </b><?php echo CHtml::encode($data->nombre); ?></div>
           		<h3><b>Fecha Creación: </b><?php echo CHtml::encode($data->fechacreacion); ?></h3>
           		<p></p>
        	</div>
    	</div>
    	    </a>


</div>
