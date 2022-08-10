<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Listar Posts', 'url'=>array('index')),
	array('label'=>'Criar Post', 'url'=>array('create')),
	array('label'=>'Gerenciar Post', 'url'=>array('admin')),
);

?>

<h1>Post #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'category',
		'title',
		'content',
		'created_at',
		array(
			'label'=>'Autor',
			'value'=>$model->author->username
		),
	),
	'htmlOptions'=>array('class'=>'table table-bordered mb-0')
)); ?>


<div id="comments">
    <?php if($model->commentCount>=1): ?>
        <h3><br><br>
            <?php echo $model->commentCount . ' comentário(s)'; ?>
        </h3>
 
        <?php $this->renderPartial('_comments',array(
            'post'=>$model,
            'comments'=>$model->comments,
        )); ?>
    <?php endif; ?>


<?php if (!Yii::app()->user->isGuest): ?>
	<br>
	<h3>Deixe um comentário</h3>
	
	<?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
		<div class="flash-success">
			<?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
		</div>
	<?php else: ?>
		<?php $this->renderPartial('/comment/_form',array(
			'model'=>$comment,
		)); ?>
	<?php endif; ?>
<?php endif; ?>
</div>



