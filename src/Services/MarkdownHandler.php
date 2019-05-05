<?php

namespace App\Services;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;

class MarkdownHandler{

    private $markdown;

    private $cache;

    public function __construct(MarkdownParserInterface $markdown, AdapterInterface $cache)
    {
        $this->markdown = $markdown;
        $this->cache = $cache;
    }

    public function parse($string)
    {
        $item = $this->cache->getItem('markdown_'.md5($string));
        if(!$item->isHit()){
            $item->set($this->markdown->transformMarkdown($string));
            $this->cache->save($item);
        }

        return $item->get();
    }

}