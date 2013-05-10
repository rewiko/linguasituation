<?php 

class Lang_model extends MY_Model {
 
    protected $table      = 'lang';
    protected $key            = 'id_lang';

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
	
}
