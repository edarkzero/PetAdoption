<?php
/* @var $this UserRolController */
/* @var $model UserRol */

$this->breadcrumbs=array(
	'User Rols'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserRol', 'url'=>array('index')),
	array('label'=>'Create UserRol', 'url'=>array('create')),
	array('label'=>'View UserRol', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserRol', 'url'=>array('admin')),
);
?>

<h1>Update UserRol <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>