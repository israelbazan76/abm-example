<?php
/* @var $this SeccionalesController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Seccionales',
);

$this->menu=array(
	array('label'=>'Create Seccionales','url'=>array('create')),
	array('label'=>'Manage Seccionales','url'=>array('admin')),
);
?>

<h1>Seccionales</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>