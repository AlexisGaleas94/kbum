<?php
/* @var $this PlanController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Plan'=>array('index'),
	$model->idplan,
);

$this->menu=array(
	array('label'=>'Mostrar Planes', 'url'=>array('index')),
	array('label'=>'Nuevo Plan', 'url'=>array('create')),
	array('label'=>'Actulizar Plan', 'url'=>array('update', 'id'=>$model->idplan)),
	array('label'=>'Eliminar Plan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idplan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Mis Planes', 'url'=>array('admin')),
);
?>

<h1>View Plan #<?php echo $model->idplan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idplan',
		'nombre',
		'fechacreacion',
		'estatus',
		'empresa_id',
	),
)); ?>
 <div class="row">
	<div class="col-sm-6">
	<a href=<?php echo "conoce/".$model->idplan ?>>
		<div class=" animated flipInY col-sm-6 " style="padding:0;">
        	<div class="tile-stats">
       	 		<div class="icon"><i class="fa fa-compass"></i>
         		</div>
         		<div class="count">Modulo 1</div>
           		<h3>Conoce tu empresa</h3>
           		<p></p>
        	</div>
    	</div>
    </a>
    <a href="#">
 		<div class=" animated flipInY col-sm-6 " style="padding:0;">
        	<div class="tile-stats ">
       	 		<div class="icon"><i class="fa fa-globe"></i>
         		</div>
         		<div class="count">Modulo 2</div>
           		<h3>Estudio de mercado</h3>
           		<p></p>
        	</div>
    	</div>
    </a>
    <a href="#">
 	<div class="animated flipInY col-sm-6" style="padding:0;">
        <div class="tile-stats">
       	 <div class="icon"><i class="fa fa-cogs"></i>
         </div>
         <div class="count">Modulo 3</div>
           <h3>Producción</h3>
           <p></p>
        </div>
    </div>
    </a>
   <a href="#">
   	 <div class="animated flipInY col-sm-6" style="padding:0;">
        <div class="tile-stats">
       	 <div class="icon"><i class="fa fa-sitemap"></i>
         </div>
         <div class="count">Modulo 4</div>
           <h3>Organización</h3>
           <p></p>
        </div>
      </div>
    </a>
   <a href="#">
    <div class="animated flipInY  col-sm-6 col-xs-12" style="padding:0;">
        <div class="tile-stats">
       	 <div class="icon"><i class="fa fa-line-chart"></i>
         </div>
         <div class="count">Modulo 5</div>
           <h3>Finanzas</h3>
           <p></p>
        </div>
    </div>
</a>
	</div>
		<div class="col-sm-6">
		<p>Un plan de negocio es una declaración formal de un conjunto de objetivos de una idea o iniciativa empresarial, que se constituye como una fase de proyección y evaluación. Se emplea internamente por la administración para la planificación de las tareas, y se evalúa la necesidad de recurrir a bancos o posibles inversores, para que aporten financiación al negocio.1​

El plan de negocio puede ser una representación comercial del modelo que se seguirá. Reúne la información verbal y gráfica de lo que el negocio es o tendrá que ser. También se lo considera una síntesis de cómo el dueño de un negocio, administrador, o empresario intentará organizar una labor empresarial y llevar a cabo las actividades necesarias y suficientes para que tenga éxito. El plan es una explicación escrita del modelo de negocio de la compañía a ser puesta en marcha.

Usualmente los planes de negocio quedan obsoletos, por lo que una práctica común es su constante renovación y actualización. Una creencia común dentro de los círculos de negocio es sobre el verdadero valor del plan, ya que lo desestiman demasiado, sin embargo se cree que lo más importante es el proceso de planificación, a través del cual el administrador adquiere un mejor entendimiento del negocio y de las opciones disponibles.</p>
	</div>


</div>