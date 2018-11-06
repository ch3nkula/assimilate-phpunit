<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 06/11/2018
 * Time: 15:32
 */

use PHPUnit\Framework\TestCase;

/**
 * @requires extension mysqli
 */
class DatabaseUseRequiresAnnotTest extends TestCase
{
	/**
	 * @requires PHP 5.3
	 */
	public function testConnection()
	{
		// Test requires the mysqli extension and PHP >= 5.3
		$this->assertTrue( true );
	}

	// ... All other tests requires the mysqli extension **only**
}
