<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cedula,
);

$this->menu=array(
	array('label'=>'Lista de Cliente', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Editar Cliente', 'url'=>array('update', 'id'=>$model->cedula)),
	array('label'=>'Eliminar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h1>View Cliente #<?php echo $model->cedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'image',
		'nombre',
		'cedula',
		'Email',
		'Fecha_nacimiento',
	),
)); 

?>
<img src="<?php echo Yii::app()->baseUrl.'/images/' . $model->image ?>">
