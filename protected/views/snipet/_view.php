<?php
/* @var $this SnipetController */
/* @var $data Snipet */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_title')); ?>:</b>
	<?php echo CHtml::encode($data->code_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_snipet')); ?>:</b>
	<?php echo CHtml::encode($data->code_snipet); ?>
	<br />


</div>