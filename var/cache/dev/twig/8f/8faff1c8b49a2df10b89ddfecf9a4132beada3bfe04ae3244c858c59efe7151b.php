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

/* index.html.twig */
class __TwigTemplate_f9614af35f3faa2f6139f93a43f7be85d5d068168aa9c68b3f2bae58c979670a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <br><br>

    <div class=\"container-fluid mt-5\">
        <div class=\"col-md-6 offset-md-3\">
            <h3 class=\"text-center mb-4\">
                Basic Tasks Management Symfony CRUD Form
            </h3>
            <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create-task");
        echo "\" method=\"POST\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <input type=\"text\" class=\"form-control\" id=\"task\" name=\"task\" placeholder=\"Enter task name...\" aria-label=\"Task name\">
                    </div>
                </div>
                <br>
                <button type=\"submit\" class=\"btn btn-primary\" style=\"min-width:140px;\">Submit task</button>
            </form>
        </div>

        <br>

        <div class=\"col-md-6 offset-md-3\">
            <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all");
        echo "\" class=\"btn btn-warning mb-1\" style=\"min-width:140px;\">
                See all tasks
            </a>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  69 => 12,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}

    <br><br>

    <div class=\"container-fluid mt-5\">
        <div class=\"col-md-6 offset-md-3\">
            <h3 class=\"text-center mb-4\">
                Basic Tasks Management Symfony CRUD Form
            </h3>
            <form action=\"{{ path('create-task') }}\" method=\"POST\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <input type=\"text\" class=\"form-control\" id=\"task\" name=\"task\" placeholder=\"Enter task name...\" aria-label=\"Task name\">
                    </div>
                </div>
                <br>
                <button type=\"submit\" class=\"btn btn-primary\" style=\"min-width:140px;\">Submit task</button>
            </form>
        </div>

        <br>

        <div class=\"col-md-6 offset-md-3\">
            <a href=\"{{ path('all') }}\" class=\"btn btn-warning mb-1\" style=\"min-width:140px;\">
                See all tasks
            </a>
        </div>
    </div>

{% endblock %}", "index.html.twig", "D:\\Work\\Bytes Curation\\TASKS\\Symfony 5 CRUD Application\\symfony_crud_form\\templates\\index.html.twig");
    }
}
