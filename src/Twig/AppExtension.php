<?php

namespace App\Twig;

use App\Services\MarkdownHandler;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{

    /**
     * @var MarkdownHandler
     */
    private $markdownHandler;

    public function __construct(MarkdownHandler $markdownHandler)
    {

        $this->markdownHandler = $markdownHandler;
    }

    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('cached_markdown', [$this, 'processMarkdown'], ['is_safe' => ['html']]), //['is_safe' => ['html']] prevents escaping
        ];
    }

    public function processMarkdown($value)
    {
        return $this->markdownHandler->parse($value);
    }
}
