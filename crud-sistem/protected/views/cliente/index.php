<?php
/* @var $this ClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clientes',
);

?>

<h1>Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
?>
<style type="text/css">
   	.breadcrumbs{
   	width: 60%;
    display: block;
    margin: 0 auto;
	}
   </style> 
