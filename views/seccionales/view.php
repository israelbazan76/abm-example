<?php
/* @var $this SeccionalesController */
/* @var $model Seccionales */
?>

<?php
$this->breadcrumbs=array(
	'Seccionales'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Seccionales', 'url'=>array('index')),
	array('label'=>'Create Seccionales', 'url'=>array('create')),
	array('label'=>'Update Seccionales', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Seccionales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Seccionales', 'url'=>array('admin')),
);
?>

<h1>View Seccionales #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'code',
		'name',
		'created_date',
		'modified_date',
	),
)); ?>