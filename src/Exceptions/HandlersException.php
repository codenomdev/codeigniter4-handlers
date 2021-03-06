<?php

namespace Codenom\Exports\Exceptions;

use CodeIgniter\Exceptions\ExceptionInterface;
use CodeIgniter\Exceptions\FrameworkException;

class ExportsException extends \RuntimeException implements ExceptionInterface
{
	public static function forLoadFail($file, $error)
	{
		return new static(lang('Handlers.loadFail', [$file, $error]));
	}

	public static function forMissingClass($file, $class)
	{
		return new static(lang('Handlers.missingClass', [$file, $class]));
	}

	public static function forInvalidFormat($class)
	{
		return new static(lang('Handlers.invalidFormat', [$class]));
	}
}

/** End of file src/Exceptions/HandlersException.php */
