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
	<div class="nav">
		<b>Category:</b>
		<?php echo($data->category); ?>
		<br/>
		<?php echo CHtml::link("Comentários ({$data->commentCount})",$data->getUrl().'#comments'); ?>
	</div>
</div>


</div>