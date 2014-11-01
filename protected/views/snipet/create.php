<?php
/* @var $this SnipetController */
/* @var $model Snipet */

$this->breadcrumbs=array(
	'Snipets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Snipet', 'url'=>array('index')),
	array('label'=>'Manage Snipet', 'url'=>array('admin')),
);
?>

<h1>Create Snipet</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>