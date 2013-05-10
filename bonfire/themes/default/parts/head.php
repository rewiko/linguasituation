<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->settings_lib->item('site.title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

				<script src="<?php echo Template::theme_url('js/modernizr-2.5.3.js') ?>"></script>
				
<!--
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
-->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js "></script>
				<script src="<?php echo base_url(); ?>assets/js/jqueryUI/js/jquery-ui-1.8.16.custom.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	
			
				<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
				<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/jqueryUI/css/custom-theme/jquery-ui-1.8.16.custom.css" media="screen" />
				<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/jqueryUI/css/custom-theme/jquery.ui.1.8.16.ie.css" media="screen" />
<!--
				<link rel="stylesheet" type="text/css" href="<?php //echo base_url()?>assets/css/style_linguasituation.css"  />
-->
 
				<?php echo Assets::css(); ?>

    <!-- iPhone and Mobile favicon's and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/images/apple-touch-icon-114x114.png">

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35902779-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </head>
<body>
<!--[if lt IE 7]>
		<p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or
		<a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
<![endif]-->
