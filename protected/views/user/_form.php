<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
/* @var $s2_userRoles array */

$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/scripts/select2/select2.js',CClientScript::POS_END);
$cs->registerCssFile($baseUrl.'/scripts/select2/select2.css');

Yii::app()->clientScript->registerScript('select2Form', "
$(document).ready(function() { $('#User_rol_id').select2({allowClear: true}); });
");
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rol_id'); ?>
		<?php echo $form->dropDownList($model,'rol_id',
            $s2_userRoles,
            array('data-placeholder' => Yii::t('app','Select rol'),'style' => 'width:100%')
        ); ?>
		<?php echo $form->error($model,'rol_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->