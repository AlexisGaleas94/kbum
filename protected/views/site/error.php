<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h1>Error <?php echo $code; ?></h1>

<h2><?php echo CHtml::encode($message); ?></h2>
<div class="more_w3ls">
	<a href="<?php Yii::app()->user->returnUrl;?>">Volver</a>
</div>