<?php
class Migration_Lang_tables extends Migration {
	
	public $migration_type = 'sql';

	public function up()
	{
// 		$this->load->dbforge();

// 		$this->dbforge->add_field('id_playlists BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT');
// 		$this->dbforge->add_field('libelle_playlists VARCHAR(255) NOT NULL');
// 		$this->dbforge->add_field('slug VARCHAR(255) NOT NULL');
// 		$this->dbforge->add_field('created_on DATETIME NOT NULL');
// 		$this->dbforge->add_field('modified_on DATETIME NULL');
// 		$this->dbforge->add_field('deleted TINYINT(1) NOT NULL DEFAULT 0');
// 		$this->dbforge->add_key('id_playlists', TRUE);

// 		$this->dbforge->create_table('playlists');
		
		$sql = "CREATE TABLE IF NOT EXISTS `bf_lang` (
					  `id_lang` bigint(20) unsigned NOT NULL,
					  `libelle_lang` varchar(50) NOT NULL,
					  PRIMARY KEY (`id_lang`)
				) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;";
		
		return $sql;
	}

	//--------------------------------------------------------------------

	public function down()
	{
// 		$this->load->dbforge();

// 		$this->dbforge->drop_table('playlists');
		
		$sql = "DROP TABLE bf_link_words_playlists";
		
		return $sql;
	}

	//--------------------------------------------------------------------

}
