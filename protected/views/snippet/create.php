<?php
/* @var $this SnippetController */
/* @var $model Snippet */

$this->breadcrumbs=array(
	'Snippets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Snippets', 'url'=>array('index')),
	array('label'=>'Manage Snippets', 'url'=>array('admin')),
);
?>

<h1>Create Snippet</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>