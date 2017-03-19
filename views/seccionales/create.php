<?php
/* @var $this SeccionalesController */
/* @var $model Seccionales */
?>

<?php
$this->breadcrumbs=array(
	'Seccionales'=>array('index'),
	'Create',
);


?>

<h1>Crear nueva seccional</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>