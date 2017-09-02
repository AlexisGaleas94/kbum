<?php
$this->breadcrumbs=array(
	'Analisis'=>array('index'),
);
?>

<h1>Analisis de mi Empresa</h1>
<?php 

$this->widget(
    'booster.widgets.TbWizard',
    array(
        'type' => 'tabs', // 'tabs' or 'pills'
        'pagerContent' => '
        		</br>
        		</br>
				<div id="wizard-bar" class="progress progress-striped active">
				  <div class="progress-bar"  style="width: 0"></div>
				</div>

				<div style="float:right">
					<input type="button" class="btn button-next" name="next" value="Siguiente" />
					<input type="button" class="btn button-last" name="last" value="Fin" />
				</div>

				<div style="float:left">
					<input type="button" class="btn button-first" name="first" value="Inicio" />
					<input type="button" class="btn button-previous" name="previous" value="Atras" />
				</div><br /><br />',
        'options' => array(
            'nextSelector' => '.button-next',
            'previousSelector' => '.button-previous',
            'firstSelector' => '.button-first',
            'lastSelector' => '.button-last',
            'onTabShow' => 'js:function(tab, navigation, index) {
						var $total = navigation.find("li").length;
						var $current = index+1;
						var $percent = ($current/$total) * 100;
						$("#wizard-bar > .progress-bar").css({width:$percent+"%"});
			}',
            'onTabClick' => 'js:function(tab, navigation, index) {alert("Elemento Bloqueado");return false;}',
        ),
        'tabs' => array(
            array(
            	'label' => 'Registro de empresa', 
            	'content' => $this->renderPartial("empresa_form",array('modelempresa'=>$modelempresa),true,false), 
            	'active' => true),

            array(
            	'label' => 'Registro de Empleados', 
            	'content' => $this->renderPartial("usuarios_form",array('modelusuarios'=>$modelusuarios),true,false)),

            array(
            	'label' => 'Test Aspecto Legal', 
            	'content' => $this->renderPartial("test_form",array(),true,false)),

            /*array(
            	'label' => 'Test Mercadotecnia', 
            	'content' => $this->renderPartial("usuarios_form",array('modelempresa'=>$modelempresa,'modeltest'=>$modeltest, 'modelusuarios'=>$modelusuarios),true,false)),

            array(
            	'label' => 'Test Organizacional', 
            	'content' => $this->renderPartial("test_form",array('modelempresa'=>$modelempresa,'modeltest'=>$modeltest, 'modelusuarios'=>$modelusuarios),true,false)),

            array(
            	'label' => 'Test Tecnología', 
            	'content' => $this->renderPartial("test_form",array('modelempresa'=>$modelempresa,'modeltest'=>$modeltest, 'modelusuarios'=>$modelusuarios),true,false)),

            array(
            	'label' => 'Test Finanzas', 
            	'content' => $this->renderPartial("test_form",array('modelempresa'=>$modelempresa,'modeltest'=>$modeltest, 'modelusuarios'=>$modelusuarios),true,false)),

            array(
            	'label' => 'Fin de Análisis', 
            	'content' => $this->renderPartial("test_form",array('modelempresa'=>$modelempresa,'modeltest'=>$modeltest, 'modelusuarios'=>$modelusuarios),true,false)),*/
        ),
    )
); 
?>