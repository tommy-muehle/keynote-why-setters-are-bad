<?php

class Article
{
    private $deleted = false;

    // ...

    public function setDeleted($deleted)
    {
        $this->deleted = (bool) $deleted;
    }

    // ...
}