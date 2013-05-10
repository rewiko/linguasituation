<section id="create_playlist">
	<div class="page-header">
		<h1><?php echo 'Create playlist:'; ?></h1>
	</div>
	
<div class="row-fluid">
	<div class="span12">

<?php echo form_open('playlist/create', array('class' => "form-horizontal", 'autocomplete' => 'off')); ?>
	<?php if(form_error('playlist_value')){?>
	 <div class="alert alert-block alert-error fade in notification">
		<!-- data-dismiss="alert" sert à rendre le lien actif pour supprimer la notification		 -->
		<a data-dismiss="alert" class="close" href="#">&times;</a>
		<div><?php echo form_error('playlist_value')?></div>
	</div>
	<?php }?>
	
	<div class="control-group">
	
		<label class="control-label" for="playlist_value">Nom</label>
		<div class="controls">
			<input class="span6" type="text" name="playlist_value" id="playlist_value" value="<?php echo set_value('playlist_value'); ?>" tabindex="3" placeholder="Nom de la playlist" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="submit">&nbsp;</label>
		<div class="controls">
			<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Créer" tabindex="4" />
		</div>
	</div>
	
<?php echo form_close(); ?>

	</div>
</div>

 <script type="text/javascript">
 $(document).ready(function() {
 jQuery(function($){

	
	
 });
 });
</script>
</section>
