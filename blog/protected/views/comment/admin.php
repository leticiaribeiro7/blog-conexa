<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Gerenciar Comentários',
);

$this->menu=array(
	array('label'=>'Listar Posts', 'url'=>array('/post/index')),
	array('label'=>'Criar Post', 'url'=>array('/post/create')),
	array('label'=>'Gerenciar Post', 'url'=>array('/post/admin')),
	array('label'=>'Gerenciar Comentários', 'url'=>array('admin')),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Comentários</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comment-grid',
	'dataProvider'=>$model->search('author_id'),
	'filter'=>$model,
	'columns'=>array(
		'content',
		'created_at',
		'post.title',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
