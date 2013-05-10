<?php
class Migration_Words_tables extends Migration {
	
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
		
		$sql = "CREATE TABLE IF NOT EXISTS `bf_words` (
					  `id_words` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
					  `libelle_words` varchar(255) NOT NULL,
					  `libelle_trad_words` varchar(255) NOT NULL,
					  `slug` varchar(255) NOT NULL,
					  `created_on` datetime NOT NULL,
					  `modified_on` datetime DEFAULT NULL,
					  `deleted` tinyint(1) NOT NULL DEFAULT '0',
					  `id_users` bigint(20) unsigned NOT NULL,
					  `id_lang_fk` bigint(20) unsigned NOT NULL,
					  PRIMARY KEY (`id_words`),
					  UNIQUE KEY `slug` (`slug`),
					  CONSTRAINT `u_words` FOREIGN KEY (`id_users`) REFERENCES `bf_users` (`id`) ON DELETE CASCADE,
					 CONSTRAINT `link_lang_fk` FOREIGN KEY (`id_lang_fk`) REFERENCES `bf_lang` (`id_lang`) ON DELETE CASCADE
					 ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;";
		
		return $sql;
	}

	//--------------------------------------------------------------------

	public function down()
	{
// 		$this->load->dbforge();

// 		$this->dbforge->drop_table('playlists');
		
		$sql = "DROP TABLE bf_words";
		
		return $sql;
	}

	//--------------------------------------------------------------------

}
