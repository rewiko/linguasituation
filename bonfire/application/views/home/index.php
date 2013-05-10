    <div class="row-fluid">
         <div class="span12">
      
       
          <div class="hero-unit">
          <?php if (isset($current_user->email)) : ?>
 
	<div class="alert alert-block alert-info fade in notification">
		<!-- data-dismiss="alert" sert à rendre le lien actif pour supprimer la notification		 -->
		<a data-dismiss="alert" class="close" href="#">&times;</a>
		<div>Pas encore de playlist! Créer s'en une! Appuyer sur le <i class="icon-plus"></i>.</div>
	</div>

<?php else :?>
        <h1>Welcome to LinguaSituation</h1>
            <p>Vous cherchez un site vous permettant d'apprendre et de retenir des mots de diverses langues, tout en les classant par genre, champ lexical. Ce site est fait pour vous, venez profiter d'une traduction et d'une possibilité d'enregistrer ces mots, puis de les partager avec d'autres utilisateurs.</p>
      
	<p style="text-align: center">
		<?php echo anchor('/register', '<i class="icon-lock icon-white"></i> '. lang('bf_action_register'), ' class="btn btn-primary btn-large" '); ?>
	</p>

<?php endif;?>
          </div>
       
         <div class="row-fluid">
<!--
			 <div class="span6">
           <div class="tabbable tabs-left">
				
				<ul class="nav nav-tabs">
					<li class="active">
					<a href="#lA" data-toggle="tab">Section 1</a>
					</li>
					<li class="">
					<a href="#lB" data-toggle="tab">Section 2</a>
					</li>
					<li class="">
					<a href="#lC" data-toggle="tab">Section 3</a>
					</li>
					<li class="">
					<a href="#lD" data-toggle="tab">Section 4</a>
					</li>
					<li class="">
					<a href="#lE" data-toggle="tab">Section 5</a>
					</li>
					<li class="">
					<a href="#lF" data-toggle="tab">Section 6</a>
					</li>
			   </ul>
				<div class="tab-content">
						<div class="tab-pane active" id="lA">
						<p>I'm in Section A.</p>
						</div>
						<div class="tab-pane" id="lB">
						<p>Howdy, I'm in Section B.</p>
						</div>
						<div class="tab-pane" id="lC">
						<p>What up girl, this is Section C.</p>
						</div>
						<div class="tab-pane" id="lD">
						<p>What up girl, this is Section C.</p>
						</div>
						<div class="tab-pane" id="lE">
						<p>What up girl, this is Section C.</p>
						</div>
						<div class="tab-pane" id="lF">
						<p>What up girl, this is Section C.</p>
						</div>
				</div>
				   </div><!-- fin span6-->
<!--
				   <div class="span6">
           <div class="tabbable tabs-left">
				
				<ul class="nav nav-tabs">
					<li class="active">
					<a href="#lA" data-toggle="tab">Section 1</a>
					</li>
					<li class="">
					<a href="#lB" data-toggle="tab">Section 2</a>
					</li>
					<li class="">
					<a href="#lC" data-toggle="tab">Section 3</a>
					</li>
					<li class="">
					<a href="#lD" data-toggle="tab">Section 4</a>
					</li>
					<li class="">
					<a href="#lE" data-toggle="tab">Section 5</a>
					</li>
					<li class="">
					<a href="#lF" data-toggle="tab">Section 6</a>
					</li>
			   </ul>
				<div class="tab-content">
						<div class="tab-pane active" id="lA">
						<p>I'm in Section A.</p>
						</div>
						<div class="tab-pane" id="lB">
						<p>Howdy, I'm in Section B.</p>
						</div>
						<div class="tab-pane" id="lC">
						<p>What up girl, this is Section C.</p>
						</div>
						<div class="tab-pane" id="lD">
						<p>What up girl, this is Section C.</p>
						</div>
						<div class="tab-pane" id="lE">
						<p>What up girl, this is Section C.</p>
						</div>
						<div class="tab-pane" id="lF">
						<p>What up girl, this is Section C.</p>
						</div>
				</div>
				</div><!--fin span 6-->

				</div><!-- fin span12-->
	
	
	
    
    
    
</div>

<!-- /tabbable -->
