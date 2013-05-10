<?php 

class Link_words_playlists_model extends MY_Model {
 
    protected $table      = 'link_words_playlists';

    // indique si on crée un champ date
    protected $set_created    = false;
    // modifier date atmatique au changement dans la BDD
    protected $set_modified   = false;
    //indique sur suppression definitive ou champs dans la BDD avec un tinyint pour savoir s'il est supprimer
    // true suppression définitive
    protected $soft_deletes   = false;
 
 
    //---------------------------------------------------------------
	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	
	}//end __construct()
	
	public function delete_link($data){
		$requete = "DELETE FROM bf_link_words_playlists
					WHERE id_words_fk=".$data['id_words_fk']." AND 	id_playlists_fk=".$data['id_playlist_fk'];
		$query = $this->db->query($requete);
	}
	
	

	
}
