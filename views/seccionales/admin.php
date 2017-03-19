<?php
/* @var $this SeccionalesController */
/* @var $model Seccionales */


$this->breadcrumbs=array(
	'Seccionales'=>array('index'),
	'Manage',
);


if(Yii::app()->user->hasFlash('success')):
    echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, Yii::app()->user->getFlash('success'));
      
endif;
if(Yii::app()->user->hasFlash('error')):
    echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, Yii::app()->user->getFlash('error'));
      
endif;
?>

<h1>Seccionales</h1>
<?php 
$this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_LIST,
    'items' => array(
        array('label' => 'Crear nueva seccional', 'url' => array('create')),
    )
));
?>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'seccionales-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
		    'name' => 'id',
		    'htmlOptions'=>array('width'=>'20'),
            'headerHtmlOptions'=>array('width'=>'20') 
		),
		
		'name',
		array(
		      'name' => 'province_id',
              'type' => 'raw',
              'value' => '$data->province->name',
              'filter' => false
           ),
		'direccion',
		/*'modified_date',*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		'template'=>'{update}{delete}',
             			  'buttons'=>array(       
                                'delete' => array( //the name {reply} must be same
                					 'label' => 'Eliminar', // text label of the button
                  			    ),
                  			    
                  			     'update' => array( //the name {reply} must be same
                					 'label' => 'Modificar', // text label of the button
                  			    ),
                                
                        ),
		),
	),
)); ?>