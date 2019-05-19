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

/* basic_page/archive.html.twig */
class __TwigTemplate_58678db7640b5572cb6e20b5b89b048c8e535bfc077c43a50d1194bd57a13b82 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "basic_page/archive.html.twig", 1);
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
        <div class=\"col-sm-6\">
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
            no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
            vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
            blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,
            consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
            </p>
        </div>
        <div class=\"col-sm-6\">
            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
            </p>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "basic_page/archive.html.twig";
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
        return new Source("", "basic_page/archive.html.twig", "/home/patrickeinatz/Dokumente/websites/patrickeinatz/templates/basic_page/archive.html.twig");
    }
}
