<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cedula=>array('view','id'=>$model->cedula),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Cliente', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'ver Cliente', 'url'=>array('view', 'id'=>$model->cedula)),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Update Cliente <?php echo $model->cedula; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>