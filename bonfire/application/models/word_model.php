<?php 

class Word_model extends MY_Model {
 
    protected $table      = 'words';
    protected $key            = 'id_words';
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
	
	public function delete_alone(){
	$requete = "DELETE FROM bf_words
				WHERE id_words 
				NOT IN (SELECT id_words_fk FROM bf_link_words_playlists)";
	$query = $this->db->query($requete);
	
	
	}
	
	

	
}
