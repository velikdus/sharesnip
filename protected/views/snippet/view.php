<?php
/* @var $this SnippetController */
/* @var $model Snippet */

$this->breadcrumbs=array(
	'Snippets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Snippets', 'url'=>array('index')),
	array('label'=>'Add snippet', 'url'=>array('create')),
	array('label'=>'Edit snippet', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Snippet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Snippets', 'url'=>array('admin')),
);
?>

<h1>View Snippet <?php echo $model->code_title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code_title',
		'code_snippet',
	),
)); ?>
