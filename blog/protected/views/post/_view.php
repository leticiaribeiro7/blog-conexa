<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

	<div class="post">
	<div class="title">
		<?php echo CHtml::link(CHtml::encode($data->title), $data->url, array()); ?>
	</div>
	<div class="author">
		posted by <?php echo $data->author->username
		. ' on ' . date('d/m/Y', strtotime($data->created_at)); ?>
		
	</div>
	<div class="content">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->content;
			$this->endWidget();
		?>
	</div>
	<div class="rounded border border-5 p-2 mb-2 border-opacity-25">
		<b>Categoria:</b>
		<?php echo ($data->category); ?>
		<br/>
		<?php echo CHtml::link("Comentários ({$data->commentCount})",$data->url.'#comments'); ?>
	</div>
	
</div>


</div>