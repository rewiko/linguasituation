<?php 

class Playlist_model extends MY_Model {
 
    protected $table      = 'playlists';
    protected $key            = 'id_playlists';
    // indique si on crée un champ date
    protected $set_created    = true;
    // modifier date atmatique au changement dans la BDD
    protected $set_modified   = true;
    //indique sur suppression definitive ou champs dans la BDD avec un tinyint pour savoir s'il est supprimer
    // true suppression définitive
    protected $soft_deletes   = false;
    // creation du datetime
    protected $date_format    = 'datetime';
    //creation du tinyint
    protected $delete = 'tinyint';
 
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
	
	public function check(){
		// rajouter user_id
		$requete = "SELECT p.id_playlists,p.libelle_playlists,w.id_words, w.libelle_words,w.libelle_trad_words 
		FROM `bf_playlists`p, bf_link_words_playlists l,bf_words w WHERE p.id_users=".$this->session->userdata('user_id')."
		AND l.id_playlists_fk =p.`id_playlists` AND l.id_words_fk=w.id_words ORDER BY p.`libelle_playlists`  ";
		$query = $this->db->query($requete);

			return $query->result();
		
	}
	
}
