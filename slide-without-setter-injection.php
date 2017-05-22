<?php

class MyService
{
    private $logger;

    // ...

    public function __construct($logger)
    {
        $this->logger = $logger;
    }
}