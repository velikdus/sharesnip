<?php
/* @var $this SnipetController */
/* @var $model Snipet */

$this->breadcrumbs=array(
	'Snipets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Snipet', 'url'=>array('index')),
	array('label'=>'Create Snipet', 'url'=>array('create')),
	array('label'=>'Update Snipet', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Snipet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Snipet', 'url'=>array('admin')),
);
?>

<h1>View Snipet #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code_title',
		'code_snipet',
	),
)); ?>
