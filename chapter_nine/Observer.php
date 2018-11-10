<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 10/11/2018
 * Time: 18:04
 */

require 'Subject.php';

class Observer
{
    public function update( $argument )
    {
        // Do something.
    }

    public function reportError( $errorCode, $errorMessage, Subject $subject )
    {
        // Do something.
    }

    // Other methods.
}
