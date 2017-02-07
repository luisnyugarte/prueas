<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Crear</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        
                        <li><a class="ajax-link" href="?r=site/index"><i class="glyphicon glyphicon-eye-open"></i><span>inicio</span></a>
                        </li>
                        <li><a class="ajax-link" href="?r=cliente/admin"><i class="glyphicon glyphicon-edit"></i><span> Editar</span></a></li>
                        <li><a class="ajax-link" href="?r=cliente/admin"><i class="glyphicon glyphicon-edit"></i><span>Lorem Ipsum</span></a></li>
                         <li><a class="ajax-link" href="?r=cliente/admin"><i class="glyphicon glyphicon-edit"></i><span>Lorem Ipsum</span></a></li>
                          <li><a class="ajax-link" href="?r=cliente/admin"><i class="glyphicon glyphicon-edit"></i><span>Lorem Ipsum</span></a></li>
                           <li><a class="ajax-link" href="?r=cliente/admin"><i class="glyphicon glyphicon-edit"></i><span>Lorem Ipsum</span></a></li>
                            <li><a class="ajax-link" href="?r=cliente/admin"><i class="glyphicon glyphicon-edit"></i><span>Lorem Ipsum</span></a></li>
                             <li><a class="ajax-link" href="?r=cliente/admin"><i class="glyphicon glyphicon-edit"></i><span>Lorem Ipsum</span></a></li>
                              <li><a class="ajax-link" href="?r=cliente/admin"><i class="glyphicon glyphicon-edit"></i><span>Lorem Ipsum</span></a></li>
                               <li><a class="ajax-link" href="?r=cliente/admin"><i class="glyphicon glyphicon-edit"></i><span>Lorem Ipsum</span></a></li>
                                <li><a class="ajax-link" href="?r=cliente/admin"><i class="glyphicon glyphicon-edit"></i><span>Lorem Ipsum</span></a></li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Inicio</a>
        </li>
        <li>
            <a href="#">crear</a>
        </li>
    </ul>
</div>
<div class="box-content">
	<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<h1>Crear un Cliente</h1>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="form">
	<div class="form-group">
		
		<?php echo $form->labelEx($model, 'Foto'); ?>
		<?php echo $form->fileField($model, 'image'); ?>
		<?php echo $form->error($model, 'image'); ?>

	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<input size="50" maxlength="50" name="Cliente[nombre]" id="Cliente_nombre" type="text" class="form-control">
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cedula'); ?>
		<input name="Cliente[cedula]" id="Cliente_cedula" type="text" class="form-control">
		<?php echo $form->error($model,'cedula'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Email'); ?>
		<input size="60" maxlength="255" name="Cliente[Email]" id="Cliente_Email" type="email" class="form-control" >
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Fecha_nacimiento'); ?>
		<input name="Cliente[Fecha_nacimiento]" id="Cliente_Fecha_nacimiento" type="date" class="form-control">
		<?php echo $form->error($model,'Fecha_nacimiento'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
              

            </div>

    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
<hr>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
