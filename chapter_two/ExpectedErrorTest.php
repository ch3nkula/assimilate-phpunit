<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 04/11/2018
 * Time: 12:35
 */

use PHPUnit\Framework\TestCase;

class ExpectedErrorTest extends TestCase
{
	/**
	 * @expectedException PHPUnit\Framework\Error\Error
	 */
	public function testingFailingInclude()
	{
		include 'not_existing_file.php';
	}
}
