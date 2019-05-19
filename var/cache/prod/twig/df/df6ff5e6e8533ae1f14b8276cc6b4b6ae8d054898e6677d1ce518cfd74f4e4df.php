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

/* basic_page/data.html.twig */
class __TwigTemplate_2e6a1256960c689744b7473915422653f1226915606f3dfa6f311d5e4384903e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "basic_page/data.html.twig", 1);
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
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">~</a></li>
        <li class=\"breadcrumb-item active\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "_</li>
    </ol>
";
    }

    // line 11
    public function block_container($context, array $blocks = [])
    {
        // line 12
        echo "    <div class=\"list-group\">
        <a href=\"#\" class=\"list-group-item list-group-item-action flex-column align-items-start active\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h5 class=\"mb-1\">List group item heading</h5>
                <small>3 days ago</small>
            </div>
            <p class=\"mb-1\">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small>Donec id elit non mi porta.</small>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action flex-column align-items-start\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h5 class=\"mb-1\">List group item heading</h5>
                <small class=\"text-muted\">3 days ago</small>
            </div>
            <p class=\"mb-1\">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small class=\"text-muted\">Donec id elit non mi porta.</small>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action flex-column align-items-start\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h5 class=\"mb-1\">List group item heading</h5>
                <small class=\"text-muted\">3 days ago</small>
            </div>
            <p class=\"mb-1\">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small class=\"text-muted\">Donec id elit non mi porta.</small>
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "basic_page/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  72 => 11,  65 => 8,  61 => 7,  55 => 5,  52 => 4,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basic_page/data.html.twig", "/home/patrickeinatz/Dokumente/websites/patrickeinatz/templates/basic_page/data.html.twig");
    }
}
