<?php
/* @var $this SnippetController */
/* @var $model Snippet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'snippet-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code_title'); ?>
		<?php echo $form->textField($model,'code_title',array('size'=>70,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'code_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code_snippet'); ?>
		<?php echo $form->textArea($model,'code_snippet',array('rows'=>20, 'cols'=>90)); ?>
		<?php echo $form->error($model,'code_snippet'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->