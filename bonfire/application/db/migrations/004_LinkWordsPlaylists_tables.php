<?php
class Migration_LinkWordsPlaylists_tables extends Migration {
	
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
		
		$sql = "CREATE TABLE IF NOT EXISTS `bf_link_words_playlists` (
					  `id_words_fk` bigint(20) unsigned NOT NULL,
					  `id_playlists_fk` bigint(20) unsigned NOT NULL,
					  CONSTRAINT `link_word_playlits_id_words_fk` FOREIGN KEY (`id_words_fk`) REFERENCES `bf_words` (`id_words`) ON DELETE CASCADE,
					  CONSTRAINT `link_word_playlits_id_playlists_fk` FOREIGN KEY (`id_playlists_fk`) REFERENCES `bf_playlists` (`id_playlists`) ON DELETE CASCADE
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
