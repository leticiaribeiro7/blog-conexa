<?php
$this->breadcrumbs=array(
	'Gerenciar Posts',
);
$this->menu=array(
	array('label'=>'Listar Posts', 'url'=>array('index')),
	array('label'=>'Criar Post', 'url'=>array('create')),
	array('label'=>'Gerenciar Post', 'url'=>array('admin')),
	array('label'=>'Gerenciar Comentários', 'url'=>array('/comment/admin')),
);
?>
<h1>Gerenciar Posts</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search('author_id'),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'title',
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->title), $data->url)'
		),

		array(
			'name'=>'created_at',
			'type'=>'datetime',
			'filter'=>true,
		),
		array(
			'class'=>'CButtonColumn',
		),
	),

)); ?>