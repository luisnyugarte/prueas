<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!--new css-->
	<link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo Yii::app()->request->baseUrl; ?> /css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?> /css/animate.min.css' rel='stylesheet'>

	
</head>

<body>

 <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?r=site/index"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Moogo</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Perfil</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Cambiar tema</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="?r=site/index"><i class="glyphicon glyphicon-globe"></i>Inicio</a></li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                              
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<footer>
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="" target="_blank">luisny Ugarte 2017</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Moogo s.a.s</a></p>
    </footer>

</div><!-- page -->

<script src="<?php echo Yii::app()->request->baseUrl; ?> /bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo Yii::app()->request->baseUrl; ?> /js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo Yii::app()->request->baseUrl; ?> /bower_components/moment/min/moment.min.js'></script>
<script src='<?php echo Yii::app()->request->baseUrl; ?> /bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo Yii::app()->request->baseUrl; ?> /js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo Yii::app()->request->baseUrl; ?> /bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo Yii::app()->request->baseUrl; ?> /bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo Yii::app()->request->baseUrl; ?> /js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo Yii::app()->request->baseUrl; ?> /bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo Yii::app()->request->baseUrl; ?> /bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo Yii::app()->request->baseUrl; ?> /js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo Yii::app()->request->baseUrl; ?> /js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo Yii::app()->request->baseUrl; ?> /js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo Yii::app()->request->baseUrl; ?> /js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo Yii::app()->request->baseUrl; ?> /js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo Yii::app()->request->baseUrl; ?> /js/charisma.js"></script>

</body>
</html>
