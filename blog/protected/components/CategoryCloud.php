<?php

Yii::import('zii.widgets.CPortlet');

class CategoryCloud extends CPortlet
{
	public $title='Categorias';

	protected function renderContent()
	{
		$categories=Category::model()->findCategories();
	
		foreach($categories as $category)
		{
			$link=CHtml::link(CHtml::encode($category), array('post/index','category'=>$category));
			echo CHtml::tag('p', array(
				'class'=>'category',
			), $link)."\n";
		}
	}
}