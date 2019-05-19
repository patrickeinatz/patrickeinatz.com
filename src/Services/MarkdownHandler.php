<?php

namespace App\Services;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;

class MarkdownHandler{

    private $markdown;

    private $cache;

    private $logger;

    private $isDebug;

    public function __construct(MarkdownParserInterface $markdown, AdapterInterface $cache, LoggerInterface $markdownLogger, bool $isDebug)
    {
        $this->markdown = $markdown;
        $this->cache = $cache;
        $this->logger = $markdownLogger;
        $this->isDebug = $isDebug;
    }

    public function parse($source)
    {
        if(strpos($source,'Lorem ipsum') !== false){
            $this->logger->info("TODO: edit example text");
        }

        if($this->isDebug)
        {
            return $this->markdown->transformMarkdown($source);
        }

        $item = $this->cache->getItem('markdown_'.md5($source));
        if(!$item->isHit()){
            $item->set($this->markdown->transformMarkdown($source));
            $this->cache->save($item);
        }

        return $item->get();
    }

}