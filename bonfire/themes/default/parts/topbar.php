<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">

	    <div class="container">
			<!-- .btn-navbar is used as the toggle for collapsible content -->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<?php echo anchor( '/', $this->settings_lib->item('site.title'), 'class="brand"' ); ?>

			<!-- Everything you want hidden at 940px or less, place within here -->
			<div class="nav-collapse collapse">
			<ul class="nav" id="filtre">
				<li class="">
				<a href="<?php echo site_url('playlist/')?>">Playlists</a>
				</li>
				<li>
				<a href="#">Friends</a>
				</li>
				
			</ul>
			<script type="text/javascript">
			jQuery(function($){
				 //ajax translation 
				 $('#form_trans').submit(function(){
					 // pseudo=$(this).find("input[name=pseudo]").val();
					 	$('#launch_search').html('').append('<img alt="chargement" title="chargement" src="<?php echo base_url(); ?>assets/images/ajax-loader.gif"/>');
					 $.ajax({
						 type: "POST",
				         url: "<?php echo site_url('traduction/check'); ?>",
				         data: $(this).serialize(),
				         success:function(html)
				         {
				         	result=jQuery.parseJSON(html);
				         
				         	$('.notification').hide();
				         	$('#launch_search').html('').append('<i class="icon-arrow-right"></i>');
				         	if(result.resultat_trans){
				         		$('#result_traduction').val(result.resultat_trans);
				         	
				         		$('#info_result').attr("data-original-title",$('#search_word').val()+' -> '+result.resultat_trans);
				         		$('#info_result').attr("data-content",result.table_result);
				         	}
				         	else{
				         		$('#notif_ajax').html('').append(result.erreur);
				         		$('#result_traduction').val('');
				         		
				         	}
				         }               
				     });
				     return false;
				 });
				 
				 //ajax popup creation playlist 
				 $('#form_create_playlist').submit(function(){
					 // pseudo=$(this).find("input[name=pseudo]").val();
					 
					$('#create_ajax_playlist').parent().append('<img alt="chargement" title="chargement" src="<?php echo base_url(); ?>assets/images/ajax-loader.gif"/>');
					
					 $.ajax({
						 type: "POST",
				         url: "<?php echo site_url('playlist/create'); ?>",
				         data: $(this).serialize(),
				         success:function(html)
				         {
							 $("#notif_popup").hide();
							 $('#create_ajax_playlist').next().remove();
				         	result=jQuery.parseJSON(html);
							$("#notif_popup").html('').append(result.notif).show();
							$("#add_playlist").val('');
							request_refresh_playlists();
							try{
							refresh_list_playlist();
						}catch(e){
						}
				         }               
				     });
				     return false;
				 });
				 //hide notification
				 $('.close').click(function(){
					 $(this).hide();
				 });
				save_into_playlist = function(){
					if($.trim($('#result_traduction').val())=='')
						$("#notif_popup").html('').append('<div class="alert alert-block alert-error fade in notification"><a data-dismiss="alert" class="close" href="#">&times;</a><div>Champ du r&eacute;sultat de la traduction vide </div></div>').show();
					else if($.trim($('#search_word').val())=='')
						$("#notif_popup").html('').append('<div class="alert alert-block alert-error fade in notification"><a data-dismiss="alert" class="close" href="#">&times;</a><div>Champ recherche du mot vide </div></div>').show();
					else if($.trim($('.form_add_to_playlist_checkbox').serialize())=='')
						$("#notif_popup").html('').append('<div class="alert alert-block alert-error fade in notification"><a data-dismiss="alert" class="close" href="#">&times;</a><div>Aucune playlist s&eacute;lectionn&eacute;e</div></div>').show();
					else{
					$.ajax({
						 type: "POST",
				         url: "<?php echo site_url('playlist/add_to_playlist/'); ?>",
				         data:$('.form_add_to_playlist').serialize(),
				         success:function(html)
				         {
							 
				         	 result=jQuery.parseJSON(html);
							$('#notif_ajax').html('').append(result.notif);
							$('#dialog').dialog("close");
							request_refresh_playlists();
							
							refresh_list_playlist();
						
							
				         
				         }               
				     });
				 }
				}
				 request_refresh_playlists = function(){
					 $.ajax({
						 type: "POST",
				         url: "<?php echo site_url('playlist/check'); ?>",
				         success:function(html)
				         {
							 
				         	result=jQuery.parseJSON(html);
							if(typeof(result)=='object'){
								content_add="";
								
								for(var i=0;i<result.length;i++)
								 {
									 content_add+="<label class=\"checkbox inline\"><input type=\"checkbox\" class='form_add_to_playlist form_add_to_playlist_checkbox' name=\"value_checked[]\" value=\""+result[i].id_playlists+"\"> "+result[i].libelle_playlists+"</label>";
								 }
								 $('#form_add_to_playlist').show();
								$('#form_create_playlist').show();
								 $('#check_list').html('').append(content_add);
							}
							else{
								if(result!=false)
								$('#form_create_playlist').hide();
								$('#form_add_to_playlist').hide();
								$('#not_connected_to_add').html('').append(result);
							}
							try{
							refresh_list_playlist();
						}catch(e){
						}
							
							
				         
				         }               
				     });
				 }
				// Dialog Link
				 $('#add_to_playlist').click(function (e) {
					request_refresh_playlists ();
				 e.preventDefault();
				  //dans la popup et a chaque close de la popup requete ajax pour refresh donnee playlist
				 $('#dialog').dialog('open');
				 return false;
				 }); 
				 
				// Dialog
				 $('#dialog').dialog({
					 autoOpen: false,
					 width: 600,
					 buttons: {
					 "Ok": function () {
						 save_into_playlist();
						 try{
							refresh_list_playlist();
						}catch(e){
						}
					 },
					 "Cancel": function () {
						$(this).dialog("close");
						request_refresh_playlists();
						try{
							refresh_list_playlist();
						}catch(e){
						}
					 }
					 }
				 }); 
				 //chargement des playlist au chargment de la page 
				 request_refresh_playlists ();
			 });
			 </script>

 

			<form class="navbar-search pull-left form-inline span6 ajax-form" id='form_trans' method="post" >
			<div class="input-append">
				<input type="text" name="search_word" rel="tooltip" style="width: 120px;" title="<h3>Entrer votre mot et taper sur ENTRER!</h3>" id="search_word"class="search-query input-medium form_add_to_playlist" value="<?php echo set_value('search_word'); ?>" placeholder="Search"/>
				<button id="launch_search" class="btn btn-small" type='submit'  ><i class="icon-arrow-right"></i></button>
<!-- 				<a href="#myModal" role="button" class="btn" data-toggle="modal"><i class="icon-plus"></i></a> -->
			<div class="input-append">
			<input type="text" class="search-query input-medium form_add_to_playlist" style="width: 120px;" name="result_traduction" id="result_traduction"   placeholder="Resultat"/>
				 <a href="#" class="add-on" id="info_result" onclick="info_pop()"  rel="popover" data-original-title="" data-content=""><i class="icon-info-sign"></i></a>
				<button class="btn btn-small" name="add_to_playlist" id="add_to_playlist" ><i class="icon-plus"></i></button>
			
				</div>
				  <select class="form_add_to_playlist" style="width: 130px;" name="lang_traduction" id="lang_traduction" >
		                <option value="enfr">Anglais-Français</option>
		                <option value="fren">Français-Anglais</option>
<!-- 		                <option value="esfr">Espagnol-Français</option> -->
<!-- 		                <option value="fres">Français-Espagnol</option> -->
<!-- 		                <option value="itfr">Italien-Français</option> -->
<!-- 		                <option value="frit">Français-Italien</option> -->
<!-- 		                <option value="arfr">Arabe-Français</option> -->
<!-- 		                <option value="frar">Français-Arabe</option> -->
<!-- 		                <option value="zhfr">Chinois-Français</option> -->
<!-- 		                <option value="frzh">Français-Chinois</option> -->
<!-- 		                <option value="czfr">Tchèque-Français</option> -->
<!-- 		                <option value="frcz">Français-Tchèque</option> -->
<!-- 		                <option value="grfr">Grecque-Français</option> -->
<!-- 		                <option value="frgr">Français-Grecque</option> -->
<!-- 		                <option value="jafr">Japonais-Français</option> -->
<!-- 		                <option value="frja">Français-Japonais</option> -->
<!-- 		                <option value="kofr">Coréen-Français</option> -->
<!-- 		                <option value="frko">Français-Coréen</option> -->
<!-- 		                <option value="plfr">Polonais-Français</option> -->
<!-- 		                <option value="frpl">Français-Polonais</option> -->
<!-- 		                <option value="ptfr">Portugais-Français</option> -->
<!-- 		                <option value="frpt">Français-Portugais</option> -->
<!-- 		                <option value="rofr">Roumain-Français</option> -->
<!-- 		                <option value="frro">Français-Roumain</option> -->
<!-- 		                <option value="trfr">Turc-Français</option> -->
<!-- 		                <option value="frtr">Français-Turc</option> -->
		            </select>
			
		            </div>
      		 
      		    
				
			</form>


<div  class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable" style="display: block; z-index: 1008; outline: 0px none; position: absolute; height: auto; width: 600px; top: 1074px; left: 649px;" tabindex="-1" role="dialog" aria-labelledby="ui-dialog-title-dialog">
	<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
		<span id="ui-dialog-title-dialog" class="ui-dialog-title">Dialog Title</span>
		<a class="ui-dialog-titlebar-close ui-corner-all"  href="#" role="button">
		<span class="ui-icon ui-icon-closethick" >close</span>
		</a>
	</div>

	<div id="dialog" title="Ajouter &agrave; une playlist" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 26.2px; height: auto;" scrolltop="0" scrollleft="0">
		<div id='notif_popup'></div>
	 <form id='form_create_playlist' class="form-inline" method="post" >
		 <div class="input-append">
		<label class="control-label" for="add_playlist">Cr&eacute;er une playlist:</label>
		<input class="span2" type="text" id="add_playlist" name="add_playlist" placeholder="Nom de la playlist">
		<button type="submit" id="create_ajax_playlist" class="btn btn-primary" data-loading-text="Cr&eacute;ation...">Cr&eacute;er</button>
		</div>
	</form>
	 <div class="row-fluid">
<!--
		 class="ajax-form" 
-->
		<div id='not_connected_to_add'></div>
		 <form id='form_add_to_playlist' method="post" >
			 <h3>Ajout de la traduction aux playlists: </h3>
     <span id="check_list"><img alt="chargement" title="chargement" src="<?php echo base_url(); ?>assets/images/ajax-loader.gif"/></span>
     </form>
     </div>
	</div>
	<div class="ui-resizable-handle ui-resizable-n"></div>
	<div class="ui-resizable-handle ui-resizable-e"></div>
	<div class="ui-resizable-handle ui-resizable-s"></div>
	<div class="ui-resizable-handle ui-resizable-w"></div>
	<div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ui-icon-grip-diagonal-se" style="z-index: 1001;"></div>
	<div class="ui-resizable-handle ui-resizable-sw" style="z-index: 1002;"></div>
	<div class="ui-resizable-handle ui-resizable-ne" style="z-index: 1003;"></div>
	<div class="ui-resizable-handle ui-resizable-nw" style="z-index: 1004;"></div>
	<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
	<div class="ui-dialog-buttonset">
	<button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" type="button" role="button" aria-disabled="false">
	<span class="ui-button-text">Ok</span>
	</button>
	<button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" type="button" role="button" aria-disabled="false">
	<span class="ui-button-text">Cancel</span>
	</button>
	</div>
	</div>
</div>



				
				<ul class="nav pull-right">
					<li class="divider-vertical"></li>
<?php  //style="height:40px" ?>
					<?php if (isset($current_user->email)) : ?>
					<li class="dropdown" >
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php echo $current_user->user_img; ?>
							<?php echo $this->session->userdata('identity'); ?>
						<b class="caret"></b></a>

						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo site_url(); ?>">
									<?php echo lang('bf_home') ?>
								</a>
							</li>

							<?php if (has_permission('Site.Content.View')) : ?>
							<li class="divider"></li>
							<li>
								<?php echo anchor(SITE_AREA, 'Control Panel'); ?>
							</li>

							<?php endif; ?>
							<li class="divider"></li>
							<li>
								<a href="<?php echo site_url('users/profile');?>">
									<?php echo lang('bf_user_settings') ?>
								</a>
							</li>

							<li class="divider"></li>
							<li>
								<a href="<?php echo site_url('logout');?>">
									<?php echo lang('bf_action_logout') ?>
								</a>
							</li>
						</ul>
					</li>

					<?php else :  ?>

						<li>
							<a href="<?php echo site_url('register');?>">
								<?php echo lang('bf_action_register') ?>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url('login');?>" class="login-btn">
								<?php echo lang('bf_action_login') ?>
							</a>
						</li>

					<?php endif; ?>
				</ul>

			</div><!--/.nav-collapse -->
		</div>	<!-- /.container -->
	</div>	<!-- /.navbar-inner -->
</div>	<!-- /.navbar -->
<!-- End of Navbar Template -->

