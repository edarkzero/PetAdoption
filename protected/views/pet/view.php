<?php
/* @var $this PetController */
/* @var $model Pet */

$this->breadcrumbs=array(
	'Pets'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Pet', 'url'=>array('index')),
	array('label'=>'Create Pet', 'url'=>array('create')),
	array('label'=>'Update Pet', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pet', 'url'=>array('admin')),
);
?>

<h1>View Pet #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'pet_category_id',
	),
)); ?>
