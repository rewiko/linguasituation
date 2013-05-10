<script type="text/javascript">
 jQuery(function($){
				 //ajax refresh playlist  
				 
				 refresh_list_playlist = function(){
					 // pseudo=$(this).find("input[name=pseudo]").val();
					  $.ajax({
						 type: "POST",
				         url: "<?php echo site_url('playlist/index'); ?>",
				         success:function(html)
				         {
				         	result=jQuery.parseJSON(html);
	
							i=-1;
							if($($("[id^='playlist_']")).parents('.active').children().length>0)
								element_active=$($("[id^='playlist_']")).parents('.active').children()[0].id;
							else
								element_active='';
							
							$($("[id^='playlist_']")).parent().remove();
							
							$.each(result, function(index, value) {
									if(i==-1)
									$("#spanplaylist").after( " <li><a id='playlist_"+value.id_playlists +"' href='#'><span class='libelle_playlist' >"+value.libelle_playlists+"</span> <i class='change_playlist icon-pencil'></i>&nbsp;<i class='supp_playlist icon-remove'></i></a></li>");
								  else if(i!=value.id_playlists){
									$($("[id^='playlist_']")).last().parent().after( " <li><a id='playlist_"+value.id_playlists +"' href='#'><span class='libelle_playlist'>"+value.libelle_playlists+"</span> <i class='change_playlist icon-pencil'></i>&nbsp;<i class='supp_playlist icon-remove'></i></a></li>");
								  }
								
								i=value.id_playlists;
							});
							//well playlist 
							l=-1;
						  first_time=1;
						  insert_code_well='';
						  $("#spanwellplaylist").children().remove();
							$.each(result, function(index, value) {
							
								if(l!=value.id_playlists&&first_time>1){
									insert_code_well+= '</div>';
								}
								if(l!=value.id_playlists){
									insert_code_well+= '<div id="wellplaylist_'+value.id_playlists+'" style="display:none" class="span12 well label-info" ><h2 style="color:white">'+value.libelle_playlists+'</h2>';
								}
								insert_code_well+= '<div id="wellword_'+value.id_words+'" class="well well-small span3 "> <span class="libelle_words">'+value.libelle_words+'</span> => <span class="libelle_trad">'+value.libelle_trad_words+'</span> <a class="btn btn-small change_word" href="#" rel="popover"  ><i class="icon-pencil"></i></a>  <a  data-dismiss="alert" class="well_close close" href="#">&times;</a></div>';
								
								l=value.id_playlists;
								first_time++;
								
							
							});
							$("#spanwellplaylist").append(insert_code_well);
							
							gestion_icon = function(){
								$('.change_word').popover( 
								{   placement:'bottom',
									trigger:'click' ,
								});
								$('.change_playlist').popover( 
								{   placement:'bottom',
									trigger:'click' ,
								});
							$('.supp_playlist').click(function(){
								$(this).replaceWith('<span> Supprimer ? <i title="oui" class="valide_supp icon-thumbs-up"> </i> <i title="non" class="annul_supp icon-thumbs-down"></i></span>');
								
								$('.valide_supp').click(function(){
									//suppression element 
									if($($("[id^='playlist_']")).parents('.active').children().length>0)
										element_active=$($("[id^='playlist_']")).parents('.active').children()[0].id;
									else
										element_active='';
									current_id_playlist=$(this).parent().parent()[0].id;
									 $.ajax({
										 type: "POST",
										 url: "<?php echo site_url('playlist/delete'); ?>",
										 data: 'id_playlist='+$(this).parent().parent()[0].id.split('_')[1]*1,
										 success:function()
										 {
											if(element_active==current_id_playlist){
											 $($("[id^='playlist_']")).parent().removeClass("active");
											 if($('#'+element_active).parent().parent().parent().prev().id=='spanplaylist'){
												 if($($("[id^='playlist_']")).length>0)
												$($("[id^='playlist_']")[0]).parent().addClass("active");}
											 else
												$('#'+element_active).parent().prev().addClass("active");
											}
											 refresh_list_playlist();
										 }
									});
									
									return false;
								});
								
								$('.annul_supp').click(function(){
									$(this).parent().replaceWith("<i class='supp_playlist icon-remove'></i>");
									gestion_icon();
									return false;
								});
								
								return false;
							});
							$('.change_playlist').click(function(){
						
								$(this).attr("data-original-title",'Modification: ');
				         		$(this).attr("data-content","<form  class='form-inline'><input type='hidden' name='id_playlist' value="+$($(this)[0]).parent()[0].id.split('_')[1]+" ><input name='changeplaylist_libelle' type='text' class='span2' value='"+$(this).parent().find('.libelle_playlist').text()+"'><input type='submit' id='changeplaylist_"+$($(this)[0]).parent()[0].id.split('_')[1]+"' class='btn btn-primary' value='Ok'></form>");
				         		$('#changeplaylist_'+$($(this)[0]).parent()[0].id.split('_')[1]).live('click',function(){
				         		$.ajax({
										 type: "POST",
										 url: "<?php echo site_url('playlist/change_playlist'); ?>",
										 data: $($(this).parent('form')).serialize(),
										 success:function(html)
										 {
											 result=jQuery.parseJSON(html);
											 $('.notification').hide();
											 $('.popover').hide();
											 $('#notif_ajax').html('').append(result.notif);
											 refresh_list_playlist();
										 }
									});
									return false;
								});
								$(this).popover('toggle');
								return false;
								
								
							});
												
							$('.change_word').click(function(){
								
								$(this).attr("data-original-title",'Modification: ');
				         		$(this).attr("data-content","<form  class='form-inline'><input type='hidden' name='id_word' value="+$($(this)[0]).parent()[0].id.split('_')[1]+" ><input name='changeword_libelle' type='text' class='span2' value='"+$($(this)[0]).parent().find('.libelle_words').text()+"'> => <input name='changeword_trad' type='text' class='span2' value='"+$($(this)[0]).parent().find('.libelle_trad').text()+"'><input type='submit' id='changeword_"+$($(this)[0]).parent()[0].id.split('_')[1]+"' class='btn btn-primary' value='Ok'></form>");
				         		$('#changeword_'+$($(this)[0]).parent()[0].id.split('_')[1]).live('click',function(){
				         		$.ajax({
										 type: "POST",
										 url: "<?php echo site_url('word/change_word'); ?>",
										 data: $($(this).parent('form')).serialize(),
										 success:function(html)
										 {
											 result=jQuery.parseJSON(html);
											 $('.notification').hide();
											 $('.popover').hide();
											 $('#notif_ajax').html('').append(result.notif);
											 refresh_list_playlist();
										 }
									});
									return false;
								});
								$(this).popover('toggle');
								return false;
						});
						
							$('.well_close').click(function(){
								if($(this).parent().parent().find('.well').length<2){
									if($($("[id^='playlist_']")).parents('.active').children().length>0)
										element_active=$($("[id^='playlist_']")).parents('.active').children()[0].id;
									else
										element_active='';
										
									current_id_playlist=$(this).parent().parent()[0].id;
									change_activeclass=true;
								}
								else
									change_activeclass=false;
							//suppression element 
								$.ajax({
										 type: "POST",
										 url: "<?php echo site_url('word/delete'); ?>",
										 data: 'id_words='+$(this).parent()[0].id.split('_')[1]*1+'&id_playlists='+$(this).parent().parent()[0].id.split('_')[1]*1,
										 success: function(){
											
											if(change_activeclass){
											if(element_active.split('_')[1]*1==current_id_playlist.split('_')[1]*1){
												 $($("[id^='playlist_']")).parent().removeClass("active");
												 if($('#'+element_active).parent().parent().parent().prev().id=='spanplaylist'){
													 if($($("[id^='playlist_']")).length>0)
													$($("[id^='playlist_']")[0]).parent().addClass("active");
												}
												 else
													$('#'+element_active).parent().prev().addClass("active");
												}
											}
												 refresh_list_playlist();	 
										}
									});
							
							});
							}
							gestion_icon();
							if(element_active==''){
								$($("[id^='wellplaylist_']")[0]).show()
								$($("[id^='playlist_']")[0]).parent().addClass("active");	
							}
							else{
								$("#well"+element_active).show();
								$("#"+element_active).parent().addClass("active");
							}
							$($("[id^='playlist_']")).click(function() {
									$('.popover').hide()
									$($("[id^='playlist_']")).parent().removeClass("active");
									$(this).parent().addClass("active");
									$("[id^='wellplaylist_']").hide();
									$("#well"+this.id).show();
									
								});
						
				         }               
				     });
				     return false;
				 };
				 refresh_list_playlist();
			 });
</script>
 <div class="row-fluid">
<div class="span3">
   <div class="well sidebar-nav">
            <ul  class="nav nav-list">
              <li id="spanplaylist" class="nav-header">Playlists</li>
              
              <?php 
              $i=-1;
              foreach ($data as $row)
				{
					if($i!=$row->id_playlists)
						echo " <li><a id='playlist_".$row->id_playlists ."' href='#'><span>".$row->libelle_playlists."</span> <i class='change_playlist icon-pencil'></i>&nbsp;<i class='supp_playlist icon-remove'></i></a></li>";
					$i=$row->id_playlists;
				}
              ?>
              
            </ul>
          </div><!--/.well -->
 </div> <!-- fin span3-->
 <div id="spanwellplaylist" class="span9">
	 
	    <?php 
		  $l=-1;
		  $first_time=1;
		  foreach ($data as $row)
			{
				if($l!=$row->id_playlists&&$first_time>1){
					echo '</div>';
				}
				if($l!=$row->id_playlists){
					echo '<div id="wellplaylist_'.$row->id_playlists.'" style="display:none" class="span12 well label-info" ><h2 style="color:white">'.$row->libelle_playlists.'</h2>';
				}
				echo '<div class="well well-small span3 "> <span class="libelle_words">'.$row->libelle_words.'</span> => <span class="libelle_trad">'.$row->libelle_trad_words.'</span> <a class="change_word icon-pencil" rel="popover" data-original-title="" data-content="" ></a> <a data-dismiss="alert" class="well_close close" href="#">&times;</a></div>';
				
				$l=$row->id_playlists;
				$first_time++;
				
			
			}
			
			
			
              
       ?>
	 
 </div><!-- fin span9-->
 </div>
