<?php echo theme_view('parts/_header'); ?>

	<div class="container body">

		<?php echo Template::message(); 
		echo '<div id="notif_ajax"> </div>';
		?>
		
		<?php echo isset($content) ? $content : Template::yield(); ?>

	</div>
<?php echo theme_view('parts/_footer'); ?>
