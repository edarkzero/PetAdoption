<?php
/* @var $this PetController */
/* @var $model Pet */

$this->breadcrumbs=array(
	'Pets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pet', 'url'=>array('index')),
	array('label'=>'Manage Pet', 'url'=>array('admin')),
);
?>

<h1>Create Pet</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>