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
class Playlist extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('playlist_model');
		$this->load->model('word_model');
		
	
		Template::set('toolbar_title', 'Playlist');
	}
	
	/**
	 * Displays the homepage of the Bonfire app
	 *
	 * @return void
	 */
	public function index()
	{	
		$this->auth->restrict();
		if($this->input->get('callback')){
			 header('Content-Type: text/javascript; charset=UTF-8');
			echo "callback(".json_encode($this->playlist_model->check()).")";
		}
		else{
		if($this->input->is_ajax_request()){
				echo json_encode($this->playlist_model->check());
		}
		else{
		$data = array(
			'data'   => $this->playlist_model->check()
		);
		Template::set($data);
		Template::render();
		}}
	}//end index()

	public function create(){
		$this->auth->restrict();
 
			// Validate input
			// 			$this->form_validation->set_rules('email', 'lang:bf_email', 'required|trim|strip_tags|valid_email|max_length[120]|unique[users.email]|xss_clean');
			if($this->input->is_ajax_request())
				$this->form_validation->set_rules('add_playlist', 'Nom de la playlist', 'required|trim|strip_tags|max_length[50]|xss_clean');
			else
				$this->form_validation->set_rules('playlist_value', 'Nom de la playlist', 'required|trim|strip_tags|max_length[50]|xss_clean');
		
			if ($this->form_validation->run()) {
				//	Le formulaire est valide
				if($this->input->is_ajax_request())
					$slug=url_title($this->input->post('add_playlist'), 'dash', true);
				else
					$slug=url_title($this->input->post('playlist_value'), 'dash', true);
				$slug_test=$slug;
				$i=1;
			
				while(!($this->playlist_model->is_unique('slug', $slug_test))){
					$slug_test=$slug.$i;
					$i++;
				}
				
				if($this->input->is_ajax_request()){
					$data = array(
						'libelle_playlists' => $this->input->post('add_playlist'),
						'slug'=>  $slug_test,
						'id_users' => $this->session->userdata('user_id')
				);
				}
				else{
					$data = array(
							'libelle_playlists' => $this->input->post('playlist_value'),
							'slug'=>  $slug_test,
							'id_users' => $this->session->userdata('user_id')
					);
				}
				
				if($this->playlist_model->insert($data)){
					//création flash session good creation
					if($this->input->is_ajax_request()){
					//~ notification
					$data['notif']=' <div class="alert alert-block alert-success fade in notification">
		<a data-dismiss="alert" class="close" href="#">&times;</a>
		<div>Playlist Ajout&eacute;e!</div>
	</div>  ';
					}
					else{
						Template::set_message('Votre playlist a bien été créé!.', 'success');
						Template::redirect('playlist/create');
					}
					
				}
				else {
					//création flash session bad creation
					if($this->input->is_ajax_request()){
						$data['notif']=' <div class="alert alert-block alert-error fade in notification"><a data-dismiss="alert" class="close" href="#">&times;</a><div>'.form_error('add_playlist').'</div></div> ';
					}
					else{
					Template::set_message('Problème de création de la playlist!', 'error');
					}
				}
			}
			else{
				//création flash session bad creation
				if($this->input->is_ajax_request()){
					$data['notif']=' <div class="alert alert-block alert-error fade in notification"><a data-dismiss="alert" class="close" href="#">&times;</a><div>'.form_error('add_playlist').'</div></div>';
				}
				else{
				Template :: set ('toolbar_title', 'Créer nouvelle playlist');
				Template::render();
				}
			}
		
		if($this->input->is_ajax_request()){
			echo json_encode($data);
		}
		else{
		Template :: set ('toolbar_title', 'Créer nouvelle playlist');
	//	Template :: set_view ('playlist/create');
	// charge vue du même nom de la méthode
		Template::render();
		}
	}
	
	public function delete(){
		if($this->input->is_ajax_request()){
				$this->form_validation->set_rules('id_playlist', 'id word', 'required|trim|strip_tags|max_length[50]|xss_clean');
				
				if ($this->form_validation->run()) {
					$this->playlist_model->delete($this->input->post('id_playlist'));
					$this->word_model->delete_alone();
				}
		}
	}
	
	
	
	public function check(){ 
		if($this->input->is_ajax_request()){
			if ($this->auth->is_logged_in()){
				echo json_encode($this->playlist_model->order_by('libelle_playlists', 'asc')->find_all_by('id_users', $this->session->userdata('user_id')));
			}
			else{
				echo json_encode($data['message']="<h3>Connecte-toi pour pouvoir enregistrer tes traductions dans des playlists!</h3></br><p style=\"text-align: center\">".anchor('/login', '<i class="icon-user icon-white"></i> '. lang('bf_action_login'), ' class="btn btn-primary btn-large" ')."</p>");
				
			}
		}
		else
			redirect();
	}
	
	public function add_to_playlist(){
		if($this->input->is_ajax_request()){
			if ($this->auth->is_logged_in()){
				//~ $this->load->model('word_model');
				$this->load->model('lang_model');
				$this->load->model('link_words_playlists_model');
				//verification 
				$this->form_validation->set_rules('search_word', 'Mot Recherch&eacute;', 'required|trim|strip_tags|max_length[50]|xss_clean');
				$this->form_validation->set_rules('result_traduction', 'R&eacute;sultat Traduction', 'required|trim|strip_tags|max_length[50]|xss_clean');
				$this->form_validation->set_rules('lang_traduction', 'Type de Langue', 'required|trim|strip_tags|max_length[50]|xss_clean');
			
				// add des 2 words 
				//~ lien vers controllers words
				if ($this->form_validation->run()) {
				$slug=url_title($this->input->post('search_word'), 'dash', true);
				$slug_test=$slug;
				$i=1;
			
				while(!($this->word_model->is_unique('slug', $slug_test))){
					$slug_test=$slug.$i;
					$i++;
				}
				
				$id_lang=$this->lang_model->find_by('libelle_lang',$this->input->post('lang_traduction'));
				
				$data = array(
							'libelle_words' => $this->input->post('search_word'),
							'libelle_trad_words' => $this->input->post('result_traduction'),
							'slug'=>  $slug_test,
							'id_users' => $this->session->userdata('user_id'),
							'id_lang_fk' => $id_lang->id_lang,
					
					);
				$this->word_model->insert($data);
				
				$query = $this->db->query('SELECT MAX(id_words) AS id_max FROM bf_words');
				$row = $query->row_array();
				$last_id= $row['id_max'];

				foreach($this->input->post('value_checked') as $value)
				{
					$this->link_words_playlists_model->insert(array('id_words_fk'=>$last_id,'id_playlists_fk'=>$value));
				}
				$data['notif']=' <div class="alert alert-block alert-success fade in notification">
		<a data-dismiss="alert" class="close" href="#">&times;</a>
		<div>L\'ajout dans les playlists s\'est correctement d&eacute;roul&eacute;!  </div>
	</div>  ';
			echo json_encode($data);
			}
			else{
				$data['notif']=' <div class="alert alert-block alert-error fade in notification">
		<a data-dismiss="alert" class="close" href="#">&times;</a>
		<div>L\'ajout dans une playlist ne s\'est pas correctement d&eacute;roul&eacute;!Veuillez r&eacute;asseyer!  </div>
	</div>  ';
			echo json_encode($data);
			}
			
			}
		}
		else
			redirect();
	}
	
	public function change_playlist(){
		if($this->input->is_ajax_request()){
				$this->form_validation->set_rules('changeplaylist_libelle', 'Libelle', 'required|trim|strip_tags|max_length[50]|xss_clean');
				//validation number
				$this->form_validation->set_rules('id_playlist', 'Id playlist', 'required|trim|strip_tags|max_length[50]|xss_clean');
				
				if ($this->form_validation->run()) {
					if($this->playlist_model->update($this->input->post('id_playlist'),array('libelle_playlists	'=>$this->input->post('changeplaylist_libelle')))){
						$data['notif']=' <div class="alert alert-block alert-success fade in notification">
		<a data-dismiss="alert" class="close" href="#">&times;</a>
		<div>Modification correctement effectu&eacute;e!</div>
	</div>  ';
					}
					else {
						$data['notif']=' <div class="alert alert-block alert-success fade in notification">
		<a data-dismiss="alert" class="close" href="#">&times;</a>
		<div>Probl&egrave;me au niveau de la modification de la traduction!</div>
	</div>  ';
					}	
				}
				else{
					$data['notif']=' <div class="alert alert-block alert-error fade in notification">
		<a data-dismiss="alert" class="close" href="#">&times;</a>
		<div>Probl&egrave;me au niveau de la modification de la traduction!</div>
	</div>  ';
					
				}
				echo json_encode($data);
			}
			else
				redirect();
	}
	
	
	
	
	
	//--------------------------------------------------------------------


}//end class
