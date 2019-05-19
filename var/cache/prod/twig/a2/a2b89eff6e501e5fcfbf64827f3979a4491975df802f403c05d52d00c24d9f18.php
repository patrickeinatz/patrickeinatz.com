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
class __TwigTemplate_4480765f135902d9eaa417cd742c158bff96723211eaa1e078495f1c541b0ae6 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basic_page/data.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "basic_page/data.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_jumbotron($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 5
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</h1>
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">~</a></li>
        <li class=\"breadcrumb-item active\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "_</li>
    </ol>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_container($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  96 => 12,  90 => 11,  80 => 8,  76 => 7,  70 => 5,  64 => 4,  52 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}
{% block jumbotron %}
    <h1>{{ title }}</h1>
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('index') }}\">~</a></li>
        <li class=\"breadcrumb-item active\">{{ title }}_</li>
    </ol>
{% endblock %}
{% block container %}
    <div class=\"list-group\">
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
{% endblock %}
", "basic_page/data.html.twig", "/home/patrickeinatz/Dokumente/websites/patrickeinatz/templates/basic_page/data.html.twig");
    }
}
