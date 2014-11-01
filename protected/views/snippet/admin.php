<?php
/* @var $this SnippetController */
/* @var $model Snippet */

$this->breadcrumbs=array(
	'Snippets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Snippet', 'url'=>array('index')),
	array('label'=>'Create Snippet', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#snippet-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Management of Snippets</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'snippet-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'code_title',
		'code_snippet',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
