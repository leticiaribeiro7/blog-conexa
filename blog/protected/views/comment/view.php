<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	$model->id,
);

?>

<h1>Visualizar Comentário #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'post.title',
		'content',
		'created_at',
		array(
			'label'=>'Autor',
			'value'=>$model->author->username
		)
	),
	//'htmlOptions'=>array('class'=>'details')
)); ?>
