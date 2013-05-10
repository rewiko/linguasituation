<?php
class Migration_Playlists_tables extends Migration {
	
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
		
		$sql = "CREATE TABLE IF NOT EXISTS `bf_playlists` (
					  `id_playlists` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
					  `libelle_playlists` varchar(255) NOT NULL,
					  `slug` varchar(255) NOT NULL,
					  `created_on` datetime NOT NULL,
					  `modified_on` datetime DEFAULT NULL,
					  `deleted` tinyint(1) NOT NULL DEFAULT '0',
					  `id_users` bigint(20) unsigned NOT NULL,
					  UNIQUE KEY `slug` (`slug`),
					  PRIMARY KEY (`id_playlists`),
					  CONSTRAINT `u_playlists` FOREIGN KEY (`id_users`) REFERENCES `bf_users` (`id`) ON DELETE CASCADE
				) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;";
		
		return $sql;
	}

	//--------------------------------------------------------------------

	public function down()
	{
// 		$this->load->dbforge();

// 		$this->dbforge->drop_table('playlists');
		
		$sql = "DROP TABLE bf_playlists";
		
		return $sql;
	}

	//--------------------------------------------------------------------

}
