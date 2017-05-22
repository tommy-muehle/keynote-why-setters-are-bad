<?php

class MyService
{
    private $logger;

    // ...

    public function myMethod(array $parameters)
    {
        // ...

        if ($this->logger instanceof LoggerInterface) {
            $this->logger->log('...');
        }
    }
}