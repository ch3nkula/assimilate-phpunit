<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 06/11/2018
 * Time: 16:02
 */

require 'Stub.php';

use PHPUnit\Framework\TestCase;

class StubTest extends TestCase
{
    public function testStub()
    {
        // Create a stub for the Stub class.
        $stub = $this->createMock(Stub::class);

        // Configure the stub.
        $stub->method('doSomething')
            ->willReturn('foo');

        // Calling $stub->doSomething() will now return 'foo'
        $this->assertSame('foo', $stub->doSomething());
    }
}
