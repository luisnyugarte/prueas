<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>No ha registrado ningun cliente</h2>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>