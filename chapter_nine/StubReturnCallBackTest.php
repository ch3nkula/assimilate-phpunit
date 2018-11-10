<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 09/11/2018
 * Time: 17:45
 */

require 'Stub.php';

use PHPUnit\Framework\TestCase;

class StubReturnCallBackTest extends TestCase
{
    public function testReturnCallbackStub()
    {
        // Create a stub for the Stub class.
        $stub = $this->createMock(Stub::class);

        // Configure the stub.
        $stub->method('doSomething')
            ->will($this->returnCallback('str_rot13'));

        // $stub->doSomething( $argument ) returns str_rot13( $argument )
        $this->assertSame('fbzrguvat', $stub->doSomething('something'));
    }
}
