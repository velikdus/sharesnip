<?php
/* @var $this SnipetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Snipets',
);

$this->menu=array(
	array('label'=>'Create Snipet', 'url'=>array('create')),
	array('label'=>'Manage Snipet', 'url'=>array('admin')),
);
?>

<h1>Snipets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
