<?php
/* @var $this SnippetController */
/* @var $data Snippet */
?>

<div class="view">

    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>

    <b><?php echo CHtml::link(CHtml::encode($data->code_title), array('view', 'id' => $data->id)); ?></b><br/>

    <i><?php echo substr(CHtml::encode($data->code_snippet), 0, 100); ?></i>

</div>