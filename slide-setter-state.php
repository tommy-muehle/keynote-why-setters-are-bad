<?php

class Article
{
    private $state = 'unknown';

    // ...

    public function setState($state)
    {
        if ($state === 'unknown') {
            // ...
        }

        $this->state = $state;
    }
}