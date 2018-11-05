<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 05/11/2018
 * Time: 16:15
 */

use PHPUnit\Framework\TestCase;

class DatabaseUseFixtureTest extends TestCase
{
	protected static $dbh;

	public static function setUpBeforeClass()
	{
		self::$dbh = new PDO( 'sqlite::memory:' );
	}

	public static function tearDownAfterClass()
	{
		self::$dbh = null;
	}
}
