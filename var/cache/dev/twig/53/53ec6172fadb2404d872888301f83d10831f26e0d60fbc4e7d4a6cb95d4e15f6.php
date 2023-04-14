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

/* @KnpPaginator/Pagination/semantic_ui_sortable_link.html.twig */
class __TwigTemplate_a02b5b8a81f0f4c61ac7949a2b56e053a0f197f645a6e7f9b40c6ff19a7c7c14 extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/semantic_ui_sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"right floated\">
        ";
        // line 3
        if ((isset($context["sorted"]) || array_key_exists("sorted", $context) ? $context["sorted"] : (function () { throw new RuntimeError('Variable "sorted" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "            ";
            if ((0 === twig_compare((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 4, $this->source); })()), "desc"))) {
                // line 5
                echo "                <i class=\"sort down icon\"></i>
            ";
            } else {
                // line 7
                echo "                <i class=\"sort up icon\"></i>
            ";
            }
            // line 9
            echo "        ";
        } else {
            // line 10
            echo "            <i class=\"sort icon\"></i>
        ";
        }
        // line 12
        echo "    </span>
    ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "
</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/semantic_ui_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  77 => 12,  73 => 10,  70 => 9,  66 => 7,  62 => 5,  59 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a{% for attr, value  in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>
    <span class=\"right floated\">
        {% if sorted %}
            {% if direction == 'desc' %}
                <i class=\"sort down icon\"></i>
            {% else %}
                <i class=\"sort up icon\"></i>
            {% endif %}
        {% else %}
            <i class=\"sort icon\"></i>
        {% endif %}
    </span>
    {{ title }}
</a>
", "@KnpPaginator/Pagination/semantic_ui_sortable_link.html.twig", "D:\\Work\\Bytes Curation\\TASKS\\Symfony 5 CRUD Application\\Symfony-5-CRUD-app\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\semantic_ui_sortable_link.html.twig");
    }
}
