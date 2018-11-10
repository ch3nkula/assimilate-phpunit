<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 10/11/2018
 * Time: 17:58
 */

use PHPUnit\Framework\TestCase;

class Subject
{
    protected $observers = [];
    protected $name;

    public function __construct( $name )
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function attach( Observer $observer )
    {
        $this->observers[] = $observer;
    }

    public function doSomething()
    {
        // Do something.
        // ...

        // Notify observers that we did something.
        $this->notify('something');
    }

    public function doSomethingBad()
    {
        foreach ( $this->observers as $observer ) {
            $observer->reportError(42, 'Something bad happened', $this);
        }
    }

    public function notify( $argument )
    {
        foreach ( $this->observers as $observer ) {
            $observer->update($argument);
        }
    }

    // Other methods.
}
