<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cedula=>array('view','id'=>$model->cedula),
	'Update',);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

   <style type="text/css">
   	.breadcrumbs{
   	width: 60%;
    display: block;
    margin: 0 auto;
	}
   </style> 