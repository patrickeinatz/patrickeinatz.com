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

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_66d68f66ca24f0326ef5d63242998289cdf40e3471510459a3f64756c2a7fd96 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", [])) {
            // line 2
            echo "at ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "class", []) . twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "type", [])) . twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", []));
            echo "(";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatArgsAsText(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "args", []));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", []), "")) : (""))) &&  !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", []), "")) : (""))))) {
            // line 5
            echo ((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", [])) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFile(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", []), twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", []))), [(" at line " . twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", [])) => ""]);
            echo ":";
            echo twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", []);
            echo ((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", [])) ? (")") : (""));
        }
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  44 => 4,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/trace.txt.twig", "/home/patrickeinatz/Dokumente/websites/patrickeinatz/vendor/symfony/twig-bundle/Resources/views/Exception/trace.txt.twig");
    }
}
