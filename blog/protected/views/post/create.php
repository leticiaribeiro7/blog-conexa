<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Post', 'url'=>array('index')),
	array('label'=>'Gerenciar Post', 'url'=>array('admin')),
);
?>

<h1>Criar Post</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>