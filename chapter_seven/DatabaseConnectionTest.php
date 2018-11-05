<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 05/11/2018
 * Time: 16:46
 */

use PHPUnit\Framework\TestCase;

class DatabaseConnectionTest extends TestCase
{
	protected function setUp()
	{
		if ( !extension_loaded( 'mysqli' ) ) {
			$this->markTestSkipped(
				'The MySQLi extension is not available.'
			);
		}
	}

	public function testConnection()
	{
		// ... do nothing :)
	}
}
