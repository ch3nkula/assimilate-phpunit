<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 04/11/2018
 * Time: 10:50
 */

use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
	public function testException()
	{
		$this->expectException( InvalidArgumentException::class );
	}
}
