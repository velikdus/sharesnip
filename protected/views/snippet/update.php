<?php
/* @var $this SnippetController */
/* @var $model Snippet */

$this->breadcrumbs=array(
	'Snippets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Snippets', 'url'=>array('index')),
	array('label'=>'Create Snippet', 'url'=>array('create')),
	array('label'=>'View Snippet', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Snippets', 'url'=>array('admin')),
);
?>

<h1>Update Snippet <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>