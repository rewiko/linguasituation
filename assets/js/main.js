 $(document).ready(function() {
 jQuery(function($){

//	close_notif=function(d){
//		$("#"+d).parent('.alert').hide();
//	};
//	 initialisation popup
	 $('#info_result').popover(
			 {
				 placement:'bottom',
				 trigger:'click' ,
				
			 });
	
	 $('#search_word').tooltip({
		 placement:'bottom',
	 });
	 
	 //fonction d'affichage popup
	 info_pop =function(){
		 $('#info_result').popover('toggle');
		
	 };
	 info_tooltip=function(){
		 $('#search_word').tooltip('show');
	 };
	 // permet de mettre en sur brillance quand un des menu de la barre de navigation est clicker
	 $("#filtre li a").click(function() {
		    
		    $("#filtre li").removeClass("active");
		    $(this).parent().addClass("active");
		    
		   
		});
		
	//mise en place des block playlist hide ..
	//$("[id*='wellplaylist_']").hide();
	$($("[id^='wellplaylist_']")[0]).show()
	$($("[id^='playlist_']")[0]).parent().addClass("active");
	$($("[id^='playlist_']")).click(function() {
		    
		    $($("[id^='playlist_']")).parent().removeClass("active");
		    $(this).parent().addClass("active");
		    $("[id^='wellplaylist_']").hide();
		    $("#well"+this.id).show();
		    
		});
        
 });
 });
