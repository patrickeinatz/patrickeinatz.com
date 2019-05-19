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

/* login/login.html.twig */
class __TwigTemplate_518b9d6ebc956e26204ddbdeb2d5132bc15e2800a3c6ec0fb3246351b61d0051 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
            <div class=\"card\" style=\"border: none; margin: 30px 0px 60px 0px;\">
                <div class=\"card-body\" style=\"padding: 20px;\">
                    <form action=\"\" autocomplete=\"off\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" name=\"username\" style=\"-webkit-border-radius: 0px;-moz-border-radius: 0px;border-radius: 0px;border: none;border-bottom: 1px solid #bbb; color:#bbb; text-align: center;\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\" name=\"password\" style=\"-webkit-border-radius: 0px;-moz-border-radius: 0px;border-radius: 0px;border: none;border-bottom: 1px solid #bbb; color:#bbb; text-align: center;\">
                        </div>
                        <br>
                        <button type=\"button\" id=\"sendlogin\" class=\"btn btn-sm btn-outline-success\" style=\"width: 100%;\">i solemnly swear i am up to no good</button>
                    </form>
                </div>
            </div>

        </div>
        <div class=\"col-md-4\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
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
    <div class=\"row\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
            <div class=\"card\" style=\"border: none; margin: 30px 0px 60px 0px;\">
                <div class=\"card-body\" style=\"padding: 20px;\">
                    <form action=\"\" autocomplete=\"off\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" name=\"username\" style=\"-webkit-border-radius: 0px;-moz-border-radius: 0px;border-radius: 0px;border: none;border-bottom: 1px solid #bbb; color:#bbb; text-align: center;\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\" name=\"password\" style=\"-webkit-border-radius: 0px;-moz-border-radius: 0px;border-radius: 0px;border: none;border-bottom: 1px solid #bbb; color:#bbb; text-align: center;\">
                        </div>
                        <br>
                        <button type=\"button\" id=\"sendlogin\" class=\"btn btn-sm btn-outline-success\" style=\"width: 100%;\">i solemnly swear i am up to no good</button>
                    </form>
                </div>
            </div>

        </div>
        <div class=\"col-md-4\"></div>
    </div>
{% endblock %}", "login/login.html.twig", "/home/patrickeinatz/Dokumente/websites/patrickeinatz/templates/login/login.html.twig");
    }
}
