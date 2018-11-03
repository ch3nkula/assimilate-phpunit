<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 03/11/2018
 * Time: 17:23
 */

use PHPUnit\Framework\TestCase;

class DependencyFailureTest extends TestCase
{
	public function testOne()
	{
		$this->assertTrue( false );
	}

	/**
	 * @depends testOne
	 */
	public function testTwo()
	{

	}
}
