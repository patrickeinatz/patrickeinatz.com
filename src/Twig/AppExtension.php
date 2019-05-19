<?php

namespace App\Twig;

use App\Services\MarkdownHandler;
use Psr\Container\ContainerInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension implements ServiceSubscriberInterface
{

    private $container;

    public function __construct(ContainerInterface $container)
    {

        $this->container = $container;
    }

    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('cached_markdown', [$this, 'processMarkdown'], ['is_safe' => ['html']]),
            new TwigFilter('excerpt', [$this, 'createExcerpt'], ['is_safe' => ['html']]),
        ];
    }

    public function processMarkdown($value)
    {
        return $this->container
            ->get(MarkdownHandler::class)
            ->parse($value);
    }

    public function createExcerpt($value)
    {
        $excerpt = $this->shorten_text($value,250,"...",true );
        return $this->container
            ->get(MarkdownHandler::class)
            ->parse($excerpt);
    }

    public static function getSubscribedServices()
    {
        return [
            MarkdownHandler::class
        ];
    }

    function shorten_text($text, $max_length = 140, $cut_off = '...', $keep_word = false)
    {
        if(strlen($text) <= $max_length) {
            return $text;
        }

        if(strlen($text) > $max_length) {
            if($keep_word) {
                $text = substr($text, 0, $max_length + 1);

                if($last_space = strrpos($text, ' ')) {
                    $text = substr($text, 0, $last_space);
                    $text = rtrim($text);
                    $text .=  $cut_off;
                }
            } else {
                $text = substr($text, 0, $max_length);
                $text = rtrim($text);
                $text .=  $cut_off;
            }
        }

        return $text;
    }




}
