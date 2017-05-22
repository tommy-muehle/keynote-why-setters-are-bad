<?php

class Article
{
    private $state = 'unknown';

    // ...

    public function publish()
    {
        $this->state = 'public';
    }
}