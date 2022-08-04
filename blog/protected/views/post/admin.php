<?php
$this->breadcrumbs=array(
	'Manage Posts',
);
?>
<h1>Manage Posts</h1>

<?php if (Yii::app()->user->name == "demo") {  //  demo é "admin", pode gerenciar todos os posts
	$data = $model->search();
} else {
	$data = $model->search("author_id");  // se não for admin, so pode gerenciar os posts proprios
}
?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$data,
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
			'filter'=>false,
		),
		array(
			'class'=>'CButtonColumn',
		),
	),

)); ?>