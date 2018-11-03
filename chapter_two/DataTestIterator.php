<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 03/11/2018
 * Time: 18:14
 */

use PHPUnit\Framework\TestCase;

require 'CsvFileIterator.php';

class DataTestIterator extends TestCase
{
	/**
	 * @dataProvider additionProvider
	 */
	public function testAdd( $a, $b, $expected )
	{
		$this->assertSame( $expected, $a + $b );
	}

	public function additionProvider()
	{
		return new CsvFileIterator( 'data.csv' );
	}
}
