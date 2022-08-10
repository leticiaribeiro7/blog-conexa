<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operações',
			'htmlOptions'=>array('style'=>'margin-left:50px; width: 130%; text-align:center;')
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->

	<div id="categories">
	<?php $this->widget('CategoryCloud', array(
		'htmlOptions'=>array(
			'style'=>'margin-left:50px;
			width: 110%;
			text-align: center')
	)); ?>
	</div>
</div>
<?php $this->endContent(); ?>