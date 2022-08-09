<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Criar Post', 'url'=>array('create')),
	array('label'=>'Gerenciar Posts', 'url'=>array('admin')),
	array('label'=>'Gerenciar Comentários', 'url'=>array('/comment/admin'))

);

?>

<?php if(!empty($_GET['category'])): ?>
<h1>Posts da categoria <i><?php echo CHtml::encode($_GET['category']); ?></i></h1>
<?php endif; ?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
)); ?>


