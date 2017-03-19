<?php
/* @var $this SeccionalesController */
/* @var $model Seccionales */
?>

<?php
$this->breadcrumbs=array(
	'Seccionales'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);


?>

    <h1>Modificar seccional[<?php echo $model->id; ?>]</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>