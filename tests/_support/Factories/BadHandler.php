<?php

namespace CIModuleTests\Support\Factories;

use CodeIgniter\Events\Events;
use Config\Services;
use Codenom\Handlers\Handlers\BaseHandler;
use Codenom\Handlers\Interfaces\HandlerInterface;

class BadHandler extends BaseHandler
{
	// Attributes for Codenom\Handlers
	public $attributes = [
		'name'       => 'Bad Factory',
		'uid'        => 'bad',
		'icon'       => 'fas fa-skull-crossbones',
		'summary'    => 'This factory does not extend HandlerInterface as it should',
	];

	public function process()
	{
	}
}