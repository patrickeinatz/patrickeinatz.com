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
class __TwigTemplate_618e495f76866d282e11afba727414be46f5bacc88e38836cda4c1752e34adea extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
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
        return array (  75 => 12,  72 => 11,  65 => 8,  61 => 7,  55 => 5,  52 => 4,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/login.html.twig", "/home/patrickeinatz/Dokumente/websites/patrickeinatz/templates/login/login.html.twig");
    }
}
