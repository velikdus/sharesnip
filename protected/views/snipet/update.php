<?php
/* @var $this SnipetController */
/* @var $model Snipet */

$this->breadcrumbs=array(
	'Snipets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Snipet', 'url'=>array('index')),
	array('label'=>'Create Snipet', 'url'=>array('create')),
	array('label'=>'View Snipet', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Snipet', 'url'=>array('admin')),
);
?>

<h1>Update Snipet <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>