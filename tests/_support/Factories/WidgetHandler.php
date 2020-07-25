<?php

namespace CIModuleTests\Support\Factories;

use CodeIgniter\Events\Events;
use Config\Services;
use Codenom\Handlers\Handlers\BaseHandler;
use Codenom\Handlers\Interfaces\HandlerInterface;

class WidgetHandler extends BaseHandler implements HandlerInterface
{
	// Attributes for Codenom\Handlers
	public $attributes = [
		'name'       => 'Widget Plant',
		'uid'        => 'widget',
		'icon'       => 'fas fa-puzzle-piece',
		'summary'    => "The world's largest supplier of widgets!",
	];

	public function process()
	{
	}
}
