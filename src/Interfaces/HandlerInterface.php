<?php

namespace Codenom\Handlers\Interfaces;

use CodeIgniter\Config\BaseConfig;

interface HandlerInterface
{
	// Magic wrapper for getting attribute values, supplied by AdapterTrait
	public function __get(string $name);

	// Function to inject a library's config
	public function setConfig(BaseConfig $config);

	// Get any errors from latest operation
	public function getErrors(): array;
}

/** End of src/Interfaces/HandlerInterface.php */
