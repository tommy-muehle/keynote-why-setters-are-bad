<?php

class Article
{
    private $deleted = false;

    // ...

    public function delete()
    {
        $this->deleted = true;
    }

    // ...
}