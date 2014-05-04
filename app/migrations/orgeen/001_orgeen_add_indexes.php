<?php

// Fix indexes that were not created before

class Migration_orgeen_add_indexes extends Model 
{
	/**
	 * Constructor
	 *
	 * Set up tablename and indexes
	 *
	 **/
	function __construct()
	{
		parent::__construct('id', 'orgeen'); //primary key, tablename

		$this->idx[] = array('org_code');

	}

	/**
	 * Migrate up
	 *
	 * Migrates this table to the current version
	 *
	 **/
	public function up()
	{
		// Get database handle
		$dbh = $this->getdbh();

		switch ($this->get_driver())
		{
			case 'sqlite':

				// In SQLite we just use 'IF NOT EXISTS'
				$sql = 'CREATE INDEX IF NOT EXISTS %s ON %s (%s)';

				break;

			case 'mysql':

				$sql = 'CREATE INDEX %s ON %s (%s)';

				// Look up existing indexes
				$indexes = $this->query("SELECT index_name 
						FROM INFORMATION_SCHEMA.STATISTICS
						WHERE table_schema = DATABASE() 
						AND table_name = '".$this->get_table_name()."'");

				foreach($indexes as $obj)
				{
					foreach($this->idx AS $k => $idx_data)
					{
						if($obj->index_name == $this->get_index_name($idx_data))
						{
							// If index exists, unset from index
							unset($this->idx[$k]);
						}
					}
				}

				break;

			default:

				throw new Exception("UNKNOWN DRIVER", 1);
				
		}

		// Call set indexes()
		$this->set_indexes($sql);


	}// End function up()

	/**
	 * Migrate down
	 *
	 * Migrates this table to the previous version
	 *
	 **/
	public function down()
	{
		// There is no down() as this is a bugfix and up() is idempotent
	}
}
