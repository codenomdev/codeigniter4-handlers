<?php

namespace Codenom\Handlers\Config;

use CodeIgniter\Config\BaseConfig;

class HandlersConfig extends BaseConfig
{
	// Whether to continue instead of throwing exceptions
	public $silent = true;

	// Session variable to check for a logged-in user ID
	public $userSource = 'logged_in';

	// Config file in each namespace to check for supported handlers
	public $configFile = 'Handlers';
}

/** End of src/Config/HandlersConfig.php */
