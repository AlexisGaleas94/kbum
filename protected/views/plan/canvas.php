  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href=<?php echo "/kbum/plan/canvas/".$model->idplan ?>>Introducción a Canvas</a></li>
    <li><a  href=<?php echo "/kbum/plan/lienzo/".$model->idplan ?>>Crea tu Canvas</a></li>
  </ul>
<div class="tab-content">
	    <div id="video" class="tab-pane fade in active">

	    	<div class="row">
				<br>
			  <div class="col-md-12" >
			  <center>
				<?php
					$sql = 'SELECT link FROM videoconoce WHERE nombre ="leccion1"';
					$rawdata = Yii::app()->db->createCommand($sql)->queryAll();
					foreach ($rawdata as $id) {	
		    			echo 
							"<iframe width='700' height='400' autoplay
							src='".$id["link"]."'>
							</iframe>";
		    		}
				?>
			</center>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-10" >
				<?php
					$sql = 'SELECT descripcion FROM videoconoce WHERE nombre ="leccion1"';
					$rawdata = Yii::app()->db->createCommand($sql)->queryAll();
					foreach ($rawdata as $id) {	
		    			echo 
							"<p>
							'".$id["descripcion"]."'
							</p>";
		    		}
				?>
			</div>
			<div class="col-md-1"></div>
			</div>
	    </div>
	 </div>
</div>
