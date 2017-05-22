<?php

class Article
{
    private $title;

    private $state;

    // ...

    public static function draft($title)
    {
        $article = new self();
        $article->state = 'draft';
        $article->title = $title;

        return $article;
    }
}