<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/mainadmin'); ?>
<div class="x_title">
	<div class="row">
       	<h3><i class="fa fa-gears"></i>Operaciones</h3>
       	<h5><?php 
  $this->widget(
    'booster.widgets.TbMenu',
    array(
        'type' => 'list',
        'htmlOptions'=>array('style'=>'display:flex;'),
        'itemCssClass'=>'tile_stats_count',        
        'items' => $this->menu,
    ));     
   ?></h5>
  	</div>
</div>

<div class="span-12">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>