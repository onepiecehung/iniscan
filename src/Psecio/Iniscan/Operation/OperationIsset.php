<?php

namespace Psecio\Iniscan\Operation;

class OperationIsset extends \Psecio\Iniscan\Operation
{
	/**
	 * Execute the "is set" operation
	 * 	If the value isn't set, return false
	 * 
	 * @param string $test Test information
	 * @param string $value Value to match on
	 * @param array $ini Current php.ini settings
	 * @return boolean Pass/fail of operation
	 */
	public function execute($test, $value, $ini)
	{
		$key = $test->key;
		$found = $this->findValue($key, $ini);
		if (empty($found)) {
			return false;
		}
		return true;
	}
}