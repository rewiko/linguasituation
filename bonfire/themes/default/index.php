<?php echo theme_view('parts/_header'); ?>

<div class="container body narrow-body"> <!-- Start of Main Container -->

<?php

	echo Template::message();
	echo '<div id="notif_ajax"> </div>';
	echo isset($content) ? $content : Template::yield();
?>

<?php echo theme_view('parts/_footer'); ?>
