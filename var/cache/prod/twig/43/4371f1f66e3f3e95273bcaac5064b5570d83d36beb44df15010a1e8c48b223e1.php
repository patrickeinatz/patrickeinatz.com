<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* basic_page/index.html.twig */
class __TwigTemplate_6daeca0f05eaa0ecfe76338205b8996309a5bbef89e5a12c56e7f978f7dae994 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'jumbotron' => [$this, 'block_jumbotron'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base.html.twig", "basic_page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 4
    public function block_jumbotron($context, array $blocks = [])
    {
        // line 5
        echo "    <h1>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item active\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">~</a></li>
        <li class=\"breadcrumb-item\"> </li>
    </ol>
";
    }

    // line 11
    public function block_container($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        echo ($context["content"] ?? null);
        echo "
    try <a href=\"/news/why-asteroids-taste-like-bacon\">Why Asteroids taste like bacon?</a>
";
    }

    public function getTemplateName()
    {
        return "basic_page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  69 => 11,  61 => 7,  55 => 5,  52 => 4,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basic_page/index.html.twig", "/home/patrickeinatz/Dokumente/websites/patrickeinatz/templates/basic_page/index.html.twig");
    }
}
