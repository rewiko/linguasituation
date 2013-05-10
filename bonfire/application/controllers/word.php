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
class Word extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('word_model');
		
		$this->auth->restrict();
		Template::set('toolbar_title', 'Word');
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
	
	public function delete(){
		//delete le lien 
		//~ puis lancer requete si mot est seul alors supprimer mot 
		$this->load->model('link_words_playlists_model');
		if($this->input->is_ajax_request()){
				$this->form_validation->set_rules('id_words', 'id word', 'required|trim|strip_tags|max_length[50]|xss_clean');
				$this->form_validation->set_rules('id_playlists', 'id playlist', 'required|trim|strip_tags|max_length[50]|xss_clean');
				
				if ($this->form_validation->run()) {
					$data=array('id_words_fk'=>$this->input->post('id_words'),
								'id_playlist_fk'=>$this->input->post('id_playlists'));
					$this->link_words_playlists_model->delete_link($data);
					//$this->input->post('id_words');
					$this->word_model->delete_alone();
				}
		}
		
	}
	
	public function change_word(){
			if($this->input->is_ajax_request()){
				$this->form_validation->set_rules('changeword_libelle', 'Libelle', 'required|trim|strip_tags|max_length[50]|xss_clean');
				$this->form_validation->set_rules('changeword_trad', 'Traduction', 'required|trim|strip_tags|max_length[50]|xss_clean');
				//validation number
				$this->form_validation->set_rules('id_word', 'Id word', 'required|trim|strip_tags|max_length[50]|xss_clean');
				
				if ($this->form_validation->run()) {
					if($this->word_model->update($this->input->post('id_word'),array('libelle_words'=>$this->input->post('changeword_libelle'),
										'libelle_trad_words'=>$this->input->post('changeword_trad')))){
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
