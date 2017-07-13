<?php

/* default/content.html.twig */
class __TwigTemplate_149b7d8a6220d354acfc7ca2a58eea77db9fa38f5efd9940a028ef189cc815d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/content.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b589f232d7d3ab394c47b71f8c60e5be7f7b03d2385399f771eb27b2fcddc1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b589f232d7d3ab394c47b71f8c60e5be7f7b03d2385399f771eb27b2fcddc1a4->enter($__internal_b589f232d7d3ab394c47b71f8c60e5be7f7b03d2385399f771eb27b2fcddc1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b589f232d7d3ab394c47b71f8c60e5be7f7b03d2385399f771eb27b2fcddc1a4->leave($__internal_b589f232d7d3ab394c47b71f8c60e5be7f7b03d2385399f771eb27b2fcddc1a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19dca541aeeb9428804d93888538f0b30cfd9bc9e17291a5340a16edd33264e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19dca541aeeb9428804d93888538f0b30cfd9bc9e17291a5340a16edd33264e9->enter($__internal_19dca541aeeb9428804d93888538f0b30cfd9bc9e17291a5340a16edd33264e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"main\">
            <article>
                <p><h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["blog"] ?? $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h2></p>
                <p class=\"mdata \">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["blog"] ?? $this->getContext($context, "blog")), "users", array()), "username", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["blog"] ?? $this->getContext($context, "blog")), "createdAt", array())), "html", null, true);
        echo "</p>
                <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["blog"] ?? $this->getContext($context, "blog")), "content", array()), "html", null, true);
        echo "</p>
            </article>


        </div>
    </div>
";
        
        $__internal_19dca541aeeb9428804d93888538f0b30cfd9bc9e17291a5340a16edd33264e9->leave($__internal_19dca541aeeb9428804d93888538f0b30cfd9bc9e17291a5340a16edd33264e9_prof);

    }

    public function getTemplateName()
    {
        return "default/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row\">
        <div class=\"main\">
            <article>
                <p><h2>{{ blog.title }}</h2></p>
                <p class=\"mdata \">{{ blog.users.username }} - {{ blog.createdAt|date }}</p>
                <p>{{ blog.content }}</p>
            </article>


        </div>
    </div>
{% endblock %}", "default/content.html.twig", "F:\\xampp\\htdocs\\blog\\app\\Resources\\views\\default\\content.html.twig");
    }
}
