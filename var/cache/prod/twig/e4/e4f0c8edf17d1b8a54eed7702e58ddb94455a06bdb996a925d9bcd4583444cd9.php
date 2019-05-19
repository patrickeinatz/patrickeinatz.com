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

/* @Httplug/webprofiler.html.twig */
class __TwigTemplate_013105086a4218c53c8cdcb1e9707784ca77b53911ff688d26f5d8fe1d4e31dc extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Httplug/webprofiler.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "stacks", [])) > 0)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "stacks", [])), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totalDuration", [])), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">ms</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "stacks", [])), "html", null, true);
            echo " requests</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Method</th>
                        <th>Target</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "stacks", []));
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 30
                echo "                            <tr>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stack"], "client", []), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stack"], "requestMethod", []), "html", null, true);
                echo "</td>
                                ";
                // line 33
                $context["target"] = twig_get_attribute($this->env, $this->source, $context["stack"], "requestTarget", []);
                // line 34
                echo "                                <td title=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["target"] ?? null)) > 30)) ? ((twig_slice($this->env, ($context["target"] ?? null), 0, 30) . "...")) : (($context["target"] ?? null))), "html", null, true);
                echo "</td>
                                <td>";
                // line 35
                (((twig_get_attribute($this->env, $this->source, $context["stack"], "duration", []) == 0)) ? (print ("n/a")) : (print (twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stack"], "duration", [])) . " ms"), "html", null, true))));
                echo "</td>
                                <td>";
                // line 36
                ((twig_get_attribute($this->env, $this->source, $context["stack"], "failed", [])) ? (print ("FAILED")) : (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["stack"], "responseCode", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["stack"], "responseCode", []), "n/a")) : ("n/a")), "html", null, true))));
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 43
            echo "
        ";
            // line 44
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@Httplug/webprofiler.html.twig", 44)->display(twig_array_merge($context, ["link" => ($context["profiler_url"] ?? null), "status" => ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "failedStacks", []))) ? ("red") : (""))]));
            // line 45
            echo "    ";
        }
    }

    // line 48
    public function block_head($context, array $blocks = [])
    {
        // line 49
        echo "    <style>
        ";
        // line 50
        echo twig_include($this->env, $context, "@Httplug/style/httplug.css.twig");
        echo "
    </style>
    <script type=\"text/javascript\">
        ";
        // line 53
        echo twig_include($this->env, $context, "@Httplug/script/httplug.js.twig");
        echo "
    </script>
    ";
        // line 55
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 58
    public function block_menu($context, array $blocks = [])
    {
        // line 59
        echo "    ";
        // line 60
        echo "    <span class=\"label ";
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "stacks", [])) == 0)) ? ("disabled") : (""));
        echo " ";
        echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "failedStacks", []))) ? ("label-status-error") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 62
        echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
        echo "
        </span>
        <strong>Httplug</strong>
        ";
        // line 65
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "failedStacks", []))) {
            // line 66
            echo "            <span class=\"count\">
                <span>";
            // line 67
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "failedStacks", [])), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 70
        echo "    </span>
";
    }

    // line 73
    public function block_panel($context, array $blocks = [])
    {
        // line 74
        echo "    <h2>HTTPlug</h2>
    <div class=\"sf-tabs\">
        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "clients", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 77
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">";
            // line 78
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countClientMessages", [0 => $context["client"]], "method"), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"";
            // line 82
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo "\".
                </p>

                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "clientRootStacks", [0 => $context["client"]], "method"));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 86
                echo "                    <div class=\"httplug-stack\">
                        ";
                // line 87
                $this->loadTemplate("@Httplug/stack.html.twig", "@Httplug/webprofiler.html.twig", 87)->display(twig_to_array(["collector" =>                 // line 88
($context["collector"] ?? null), "client" =>                 // line 89
$context["client"], "stack" =>                 // line 90
$context["stack"], "id" => twig_get_attribute($this->env, $this->source,                 // line 91
$context["loop"], "index", [])]));
                // line 93
                echo "                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 98
            echo "            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@Httplug/webprofiler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 102,  286 => 98,  279 => 95,  264 => 93,  262 => 91,  261 => 90,  260 => 89,  259 => 88,  258 => 87,  255 => 86,  238 => 85,  232 => 82,  223 => 78,  220 => 77,  215 => 76,  211 => 74,  208 => 73,  203 => 70,  197 => 67,  194 => 66,  192 => 65,  186 => 62,  178 => 60,  176 => 59,  173 => 58,  167 => 55,  162 => 53,  156 => 50,  153 => 49,  150 => 48,  145 => 45,  143 => 44,  140 => 43,  134 => 39,  125 => 36,  121 => 35,  114 => 34,  112 => 33,  108 => 32,  104 => 31,  101 => 30,  97 => 29,  80 => 15,  77 => 14,  75 => 13,  72 => 12,  66 => 9,  61 => 7,  56 => 6,  53 => 5,  50 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Httplug/webprofiler.html.twig", "/home/patrickeinatz/Dokumente/websites/patrickeinatz/vendor/php-http/httplug-bundle/src/Resources/views/webprofiler.html.twig");
    }
}
