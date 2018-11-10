<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 10/11/2018
 * Time: 18:16
 */

require 'Observer.php';

use PHPUnit\Framework\TestCase;

class SubjectTwoTest extends TestCase
{
    public function testErrorReported()
    {
        // Create a mock for the Observer class, mocking the
        // reportError() method
        $observer = $this->getMockBuilder(Observer::class)
            ->setMethods(['reportError'])
            ->getMock();

        $observer->expects($this->once())
            ->method('reportError')
            ->with(
                $this->greaterThan(0),
                $this->stringContains('Something'),
                $this->anything()
            );

        $subject = new Subject('My subject');
        $subject->attach($observer);

        // The doSomethingBad() method should report an error to the observer
        // via the reportError() method.
        $subject->doSomethingBad();
    }
}
