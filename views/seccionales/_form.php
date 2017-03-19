<?php
/* @var $this SeccionalesController */
/* @var $model Seccionales */
/* @var $form TbActiveForm */
?>
<?php
if(Yii::app()->user->hasFlash('error')):
    echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, Yii::app()->user->getFlash('error'));
      
endif; 
?>
<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'seccionales-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block"><span class="required">*</span> obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>
			<?php 
            /* echo CHtml::dropDownList('Seccionales[province_id]', $model->province_id, 
              $model->getProvinceOptions(),
              array('empty' => '(Seleccione una Provincia)'));*/
			     echo $form->dropDownListControlGroup($model, 'province_id',
        $model->getProvinceOptions(), array('empty' => '(Seleccione una Provincia)')); 
            ?>
           
            <?php echo $form->textFieldControlGroup($model,'name',array('span'=>5,'maxlength'=>200)); ?>

            <?php //echo $form->textFieldControlGroup($model,'created_date',array('span'=>5)); ?>
             <?php echo $form->textFieldControlGroup($model,'direccion',array('span'=>3)); ?>
             <?php echo $form->textFieldControlGroup($model,'codigo_postal',array('span'=>3)); ?>
             <?php echo $form->textFieldControlGroup($model,'telefonos',array('span'=>5)); ?>
            <?php echo $form->textFieldControlGroup($model,'emails',array('span'=>5)); ?>
             <?php echo $form->textFieldControlGroup($model,'site',array('span'=>3)); ?>
             <?php echo $form->textFieldControlGroup($model,'facebook',array('span'=>5)); ?>
             <?php echo $form->textFieldControlGroup($model,'twitter',array('span'=>2)); ?>
             <?php echo $form->textFieldControlGroup($model,'latitud',array('span'=>2)); ?>
             <?php echo $form->textFieldControlGroup($model,'longitud',array('span'=>2)); ?>
            

            

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
		<?php echo CHtml::link('Cancelar',array('seccionales/admin'), array('class'=>'btn btn-primary btn-large')); ?>

   		 </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->