<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 10/11/2018
 * Time: 18:22
 */

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testFunctionCalledTwoTimesWithSpecificArguments()
    {
        $mock = $this->getMockBuilder(stdClass::class)
            ->setMethods(['set'])
            ->getMock();

        $mock->expects($this->exactly(2))
            ->method('set')
            ->withConsecutive(
                [ $this->equalTo('foo'), $this->greaterThan(0) ],
                [ $this->equalTo('bar'), $this->greaterThan(0) ]
            );

        $mock->set('foo', 21);
        $mock->set('bar', 48);
    }
}
