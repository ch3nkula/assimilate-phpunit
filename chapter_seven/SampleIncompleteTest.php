<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 05/11/2018
 * Time: 16:36
 */

use PHPUnit\Framework\TestCase;

class SampleEmptyTest extends TestCase
{
	public function testSomething()
	{
		// Optional: Test anything here, if you want.
		$this->assertTrue( true, 'This should already work.' );

		// Stop here and mark this test as incomplete.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}
}
