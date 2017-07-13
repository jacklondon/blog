<?php

/* admin/add_content.html.twig */
class __TwigTemplate_40eaa9bafccc9ba273b9bdba37bea7d734eea83b2e2e788b542bb0275698c8bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/add_content.html.twig", 1);
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
        $__internal_1401b8831041aa46f1269f3dc01b8101da741772b7a03c4a774d3e83d5984f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1401b8831041aa46f1269f3dc01b8101da741772b7a03c4a774d3e83d5984f1c->enter($__internal_1401b8831041aa46f1269f3dc01b8101da741772b7a03c4a774d3e83d5984f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1401b8831041aa46f1269f3dc01b8101da741772b7a03c4a774d3e83d5984f1c->leave($__internal_1401b8831041aa46f1269f3dc01b8101da741772b7a03c4a774d3e83d5984f1c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2f11bc2feb3de4f35c4808717736bcbe8564bd5e1745426a071c9f612a05a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f11bc2feb3de4f35c4808717736bcbe8564bd5e1745426a071c9f612a05a56->enter($__internal_d2f11bc2feb3de4f35c4808717736bcbe8564bd5e1745426a071c9f612a05a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">

    </div>
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"form-group-lg\">
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'row');
        echo "
    </div>

    ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_d2f11bc2feb3de4f35c4808717736bcbe8564bd5e1745426a071c9f612a05a56->leave($__internal_d2f11bc2feb3de4f35c4808717736bcbe8564bd5e1745426a071c9f612a05a56_prof);

    }

    public function getTemplateName()
    {
        return "admin/add_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  60 => 12,  54 => 9,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"container\">

    </div>
    {{ form_errors(form) }}
    {{ form_start(form) }}
    <div class=\"form-group-lg\">
        {{ form_row(form.title) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(form.content) }}
    </div>

    {{ form_end(form) }}


{% endblock %}

", "admin/add_content.html.twig", "F:\\xampp\\htdocs\\blog\\app\\Resources\\views\\admin\\add_content.html.twig");
    }
}
