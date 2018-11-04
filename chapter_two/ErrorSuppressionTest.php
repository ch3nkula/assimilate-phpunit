<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 04/11/2018
 * Time: 12:42
 */

use PHPUnit\Framework\TestCase;

class ErrorSuppressionTest extends TestCase
{
	public function testFileWriting()
	{
		$writer = new FileWriter;

		$this->assertFalse( @$writer->write( '/is-not-writeable/file', 'stuff' ) );
	}
}

class FileWriter
{
	public function write( $file, $content )
	{
		$file = fopen( $file, 'w' );

		if ( $file == false ) {
			return false;
		}

		// ... do nothing
	}
}
