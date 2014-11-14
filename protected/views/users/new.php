<?php
/** @var CActiveForm $form */
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'signup_form',
    'action' => Helpers::createUrl('users/create')
));
?>

<p>
    <?php echo $form->labelEx($user, 'username'); ?>
    <?php echo $form->textField($user, 'username'); ?>
    <?php echo $form->error($user, 'username'); ?>
</p>

<p>
    <?php echo $form->labelEx($user, 'email'); ?>
    <?php echo $form->textField($user, 'email'); ?>
    <?php echo $form->error($user, 'email'); ?>
</p>

<p>
    <?php echo $form->labelEx($user, 'password'); ?>
    <?php echo $form->textField($user, 'password'); ?>
    <?php echo $form->error($user, 'password'); ?>
</p>

<p>
    <?php echo $form->labelEx($user, 'password_repeat'); ?>
    <?php echo $form->textField($user, 'password_repeat'); ?>
    <?php echo $form->error($user, 'password_repeat'); ?>
</p>

<p>
    <?php echo CHtml::submitButton('Sign Up', array('id' => 'create_user_button')); ?>
</p>

<?php $this->endWidget(); ?>