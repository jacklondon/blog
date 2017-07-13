<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e84255fe773cc30f277b2bfc5410e1f052cfdf0240ea69e6138c23504ff30f07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c70e6b78e10f9e20424dd8d8664d7f9bbc84cd14947502129fb3d7bb887b21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c70e6b78e10f9e20424dd8d8664d7f9bbc84cd14947502129fb3d7bb887b21f->enter($__internal_7c70e6b78e10f9e20424dd8d8664d7f9bbc84cd14947502129fb3d7bb887b21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c70e6b78e10f9e20424dd8d8664d7f9bbc84cd14947502129fb3d7bb887b21f->leave($__internal_7c70e6b78e10f9e20424dd8d8664d7f9bbc84cd14947502129fb3d7bb887b21f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab73a396c93285e67cb8fc51aa8d136680fac5573ee8056045b024e4b3454438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab73a396c93285e67cb8fc51aa8d136680fac5573ee8056045b024e4b3454438->enter($__internal_ab73a396c93285e67cb8fc51aa8d136680fac5573ee8056045b024e4b3454438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ab73a396c93285e67cb8fc51aa8d136680fac5573ee8056045b024e4b3454438->leave($__internal_ab73a396c93285e67cb8fc51aa8d136680fac5573ee8056045b024e4b3454438_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25f16879e141c69328e8778a096e981b0efa8cf73ae8578072c91b576f0c703c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f16879e141c69328e8778a096e981b0efa8cf73ae8578072c91b576f0c703c->enter($__internal_25f16879e141c69328e8778a096e981b0efa8cf73ae8578072c91b576f0c703c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_25f16879e141c69328e8778a096e981b0efa8cf73ae8578072c91b576f0c703c->leave($__internal_25f16879e141c69328e8778a096e981b0efa8cf73ae8578072c91b576f0c703c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_42d596378ae7eca95e9f9ba586839c674c7396262d1b266ad0e48e5a4c63d7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d596378ae7eca95e9f9ba586839c674c7396262d1b266ad0e48e5a4c63d7a0->enter($__internal_42d596378ae7eca95e9f9ba586839c674c7396262d1b266ad0e48e5a4c63d7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_42d596378ae7eca95e9f9ba586839c674c7396262d1b266ad0e48e5a4c63d7a0->leave($__internal_42d596378ae7eca95e9f9ba586839c674c7396262d1b266ad0e48e5a4c63d7a0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "F:\\xampp\\htdocs\\blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
