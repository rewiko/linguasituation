<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Bonfire
 *
 * An open source project to allow developers get a jumpstart their development of CodeIgniter applications
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2012, Bonfire Dev Team
 * @license   http://guides.cibonfire.com/license.html
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * playlist controller
 *
 * The base controller which displays the homepage of the Bonfire site.
 *
 * @package    Bonfire
 * @subpackage Controllers
 * @category   Controllers
 * @author     Comtois Anthony
 * @link       http://guides.cibonfire.com/helpers/file_helpers.html
 *
 */
class Traduction extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
// 		$this->load->model('translate_model');
// 		$this->auth->restrict();
	
		Template::set('toolbar_title', 'Translate');
	}
	
	/**
	 * Displays the homepage of the Bonfire app
	 *
	 * @return void
	 */
	public function index()
	{
		Template::render();
	}//end index()

	public function check(){
		
		/* is not AJAX check si ce n'est pas une requete ajax je redirige ça vers la page d'accueil */
		if(!$this->input->is_ajax_request()) {
			Template::redirect();
		}
		Template :: set ('toolbar_title', 'Translate');
		
			// Validate input
			// 			$this->form_validation->set_rules('email', 'lang:bf_email', 'required|trim|strip_tags|valid_email|max_length[120]|unique[users.email]|xss_clean');
			$this->form_validation->set_rules('search_word', 'Mot Recherché', 'required|trim|max_length[50]|xss_clean');
			$this->form_validation->set_rules('lang_traduction', 'Langue à traduire', 'required|trim|strip_tags|xss_clean');
		
			
			if ($this->form_validation->run()) {
				//	Le formulaire est valide
				$search_word=str_replace(' ','',$this->input->post('search_word'));
				$url_send_api="http://api.wordreference.com/0.8/".API_KEY_WORD."/json/".$this->input->post('lang_traduction')."/". utf8_decode( $search_word );
				//recuperation des donnee de l'utilisateur
				$curl = curl_init();
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_URL, $url_send_api);
				$resultat = curl_exec($curl);
				curl_close($curl);
				//on decode le json recuperer grace au graph
				$resultat_trad= json_decode($resultat, true);
				//pour 1 ere lighne term0 originales et Lignes
				$resultat_trans='';
				$table_result='';
				if($resultat_trad!=null){
					foreach( $resultat_trad as $value ){
				
					if(isset($value['PrincipalTranslations'])){
						$resultat_trans=$value['PrincipalTranslations']['0']['FirstTranslation']['term'];
						$table_result= $table_result.'<table class="table">';
						$table_result= $table_result. "<thead><tr><th>Principales Traduction</th></tr></thead><tbody>";
						foreach($value['PrincipalTranslations'] as $value2 ){
							if(isset($value2['OriginalTerm']['term'])&&isset($value2['FirstTranslation']['sense'])&&isset($value2['OriginalTerm']['term'])&&isset($value2['OriginalTerm']['sense'])){
								$table_result= $table_result. '<tr><td>'.$value2['OriginalTerm']['term'].'	'.$value2['OriginalTerm']['sense'].'</td><td>'.$value2['FirstTranslation']['term'].'	'.$value2['FirstTranslation']['sense'].'</td></tr>';
							}
							else{
								$table_result= $table_result. '<tr></tr>';
							}
						}
							$table_result= $table_result. '</tbody></table>';
					}
					
					
					if(isset($value['Entries'])){
						$table_result= $table_result. '<table class="table">';
						$table_result= $table_result. "<thead><tr><th>Principales Traductions</th></tr></thead><tbody>";
						if($resultat_trans==''){
						$resultat_trans=$value['Entries']['0']['FirstTranslation']['term'];
						}
						foreach($value['Entries'] as $value2 ){
							if(isset($value2['OriginalTerm']['term'])&&isset($value2['FirstTranslation']['sense'])&&isset($value2['OriginalTerm']['term'])&&isset($value2['OriginalTerm']['sense'])){
									
								$table_result= $table_result. '<tr><td>'.$value2['OriginalTerm']['term'].'	'.$value2['OriginalTerm']['sense'].'</td><td>'.$value2['FirstTranslation']['term'].'	'.$value2['FirstTranslation']['sense'].'</td></tr>';
							}
							else{
								$table_result= $table_result. '<tr></tr>';
							}
						}
						$table_result= $table_result. '</tbody></table>';
					}
					
					if(isset($value['AdditionalTranslations'])){
						$table_result= $table_result. '<table class="table">';
						$table_result= $table_result. "<thead><tr><th>Additionnelles Traduction</th></tr></thead><tbody>";
						foreach($value['AdditionalTranslations'] as $value2 ){
							if(isset($value2['OriginalTerm']['term'])&&isset($value2['FirstTranslation']['sense'])&&isset($value2['OriginalTerm']['term'])&&isset($value2['OriginalTerm']['sense'])){
									$table_result= $table_result. '<tr><td>'.$value2['OriginalTerm']['term'].'	'.$value2['OriginalTerm']['sense'].'</td><td>'.$value2['FirstTranslation']['term'].'	'.$value2['FirstTranslation']['sense'].'</td></tr>';
							}
							else{
								$table_result= $table_result. '<tr></tr>';
							}
						}
						$table_result= $table_result. '</tbody></table>';
					}
					
// 					if(isset($value['Compounds'])){
// 						foreach($value['Compounds'] as $value2 ){
// 							//original terme
// 							echo 'Compounds original<br/>';
// 							print_r($value2['OriginalTerm']);
// 							echo '<br/>';
// 							//traduction
// 							echo 'Compounds translate <br/>';
// 							print_r($value2['FirstTranslation']);
// 							echo '<br/>';
								
// 						}
// 					}
					
				}
				}
				if($resultat_trans==""||$table_result==""){
					$data['erreur']=' <div class="alert alert-block alert-error fade in notification">
					<a data-dismiss="alert" class="close" href="#">&times;</a>
					<div>Problème traduction!</div>
					</div>  ';
				}
				else{
					$data['resultat_trans']=$resultat_trans;
					$data['table_result']=$table_result;
				}
				
				echo json_encode($data);
				
// 				Template::set('resultat_trans',$resultat_trans);
				
// // 				if($this->playlist_model->insert($data)){
// // 					//création flash session good creation
// 					Template::set_message('Votre playlist a bien été créé!.', 'success');
// 				Template :: set_view ('home/index');
// 					Template::render();
// 				}
// 				else {
// 					//création flash session bad creation
// 					Template::set_message('Problème de création de la playlist!', 'error');
// 				}
			}
			else{
					$data['erreur']=' <div class="alert alert-block alert-error fade in notification">
		<a data-dismiss="alert" class="close" href="#">&times;</a>
		<div>Problème traduction!</div>
	</div>  ';
					echo json_encode($data);
				//création flash session bad creation
// 				if(form_error('search_word'))
// 					Template::set_message(form_error('search_word'), 'error');
// 				elseif (form_error('lang_traduction'))
// 					Template::set_message(form_error('lang_traduction'), 'error');
// 				else 
// 					Template::set_message('Erreur Traduction!', 'error');
				
// 				Template::redirect($this->session->userdata('previous_page'));
			
				
			}
	
	// charge vue du même nom de la méthode
// 		Template :: set_view ('home/index');
// 	// charge vue du même nom de la méthode
// 		Template::render();
	}
	
	
	
	
	//--------------------------------------------------------------------


}//end class
