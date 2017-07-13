<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_44bc87b039333abb34514bdcd8477efbb54c0754237c43c9b328c89c70fa629f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd2d52f86ab2e788673ccfd303405eab6bab73e6cc5cc05b2f74293a3ff6961b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2d52f86ab2e788673ccfd303405eab6bab73e6cc5cc05b2f74293a3ff6961b->enter($__internal_fd2d52f86ab2e788673ccfd303405eab6bab73e6cc5cc05b2f74293a3ff6961b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd2d52f86ab2e788673ccfd303405eab6bab73e6cc5cc05b2f74293a3ff6961b->leave($__internal_fd2d52f86ab2e788673ccfd303405eab6bab73e6cc5cc05b2f74293a3ff6961b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24ba8fddee032a1d693697023b644a5c2e21714bb21e3adc5826a7a27f40e28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ba8fddee032a1d693697023b644a5c2e21714bb21e3adc5826a7a27f40e28b->enter($__internal_24ba8fddee032a1d693697023b644a5c2e21714bb21e3adc5826a7a27f40e28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_24ba8fddee032a1d693697023b644a5c2e21714bb21e3adc5826a7a27f40e28b->leave($__internal_24ba8fddee032a1d693697023b644a5c2e21714bb21e3adc5826a7a27f40e28b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_585874af093bf224c31ed5e4073df9ae7bc7c5f7bcc004dd9ad8824c23e65ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585874af093bf224c31ed5e4073df9ae7bc7c5f7bcc004dd9ad8824c23e65ee1->enter($__internal_585874af093bf224c31ed5e4073df9ae7bc7c5f7bcc004dd9ad8824c23e65ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_585874af093bf224c31ed5e4073df9ae7bc7c5f7bcc004dd9ad8824c23e65ee1->leave($__internal_585874af093bf224c31ed5e4073df9ae7bc7c5f7bcc004dd9ad8824c23e65ee1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d3dd8afd493644a22e0187d79b102a75cf372eef8e48db63fe9d7d149f8d9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3dd8afd493644a22e0187d79b102a75cf372eef8e48db63fe9d7d149f8d9d4->enter($__internal_7d3dd8afd493644a22e0187d79b102a75cf372eef8e48db63fe9d7d149f8d9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7d3dd8afd493644a22e0187d79b102a75cf372eef8e48db63fe9d7d149f8d9d4->leave($__internal_7d3dd8afd493644a22e0187d79b102a75cf372eef8e48db63fe9d7d149f8d9d4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "F:\\xampp\\htdocs\\blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
