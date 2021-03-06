<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1788e60c5c3a1eccbc7ff0d81c0f4cf56ee937639eeb12610747427471f06b58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_5826cef6090c1981a725489884f95c06c85eab64fd5a78bd2ea19899eed43ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5826cef6090c1981a725489884f95c06c85eab64fd5a78bd2ea19899eed43ef3->enter($__internal_5826cef6090c1981a725489884f95c06c85eab64fd5a78bd2ea19899eed43ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5826cef6090c1981a725489884f95c06c85eab64fd5a78bd2ea19899eed43ef3->leave($__internal_5826cef6090c1981a725489884f95c06c85eab64fd5a78bd2ea19899eed43ef3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b604b61f8c5d914d6f6da73f1aa706cf3191e9dd811ffe0cde87f57fc9f5088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b604b61f8c5d914d6f6da73f1aa706cf3191e9dd811ffe0cde87f57fc9f5088->enter($__internal_4b604b61f8c5d914d6f6da73f1aa706cf3191e9dd811ffe0cde87f57fc9f5088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4b604b61f8c5d914d6f6da73f1aa706cf3191e9dd811ffe0cde87f57fc9f5088->leave($__internal_4b604b61f8c5d914d6f6da73f1aa706cf3191e9dd811ffe0cde87f57fc9f5088_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f6cbd70c5edb4b482273dd3d81a1bfda7f09ff75867bae0a05af3c1ade6775f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6cbd70c5edb4b482273dd3d81a1bfda7f09ff75867bae0a05af3c1ade6775f->enter($__internal_1f6cbd70c5edb4b482273dd3d81a1bfda7f09ff75867bae0a05af3c1ade6775f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1f6cbd70c5edb4b482273dd3d81a1bfda7f09ff75867bae0a05af3c1ade6775f->leave($__internal_1f6cbd70c5edb4b482273dd3d81a1bfda7f09ff75867bae0a05af3c1ade6775f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4680f8775e4b051f9b9e501b680922f2f53f274500276f06c9b197f43d84b02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4680f8775e4b051f9b9e501b680922f2f53f274500276f06c9b197f43d84b02a->enter($__internal_4680f8775e4b051f9b9e501b680922f2f53f274500276f06c9b197f43d84b02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4680f8775e4b051f9b9e501b680922f2f53f274500276f06c9b197f43d84b02a->leave($__internal_4680f8775e4b051f9b9e501b680922f2f53f274500276f06c9b197f43d84b02a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "F:\\xampp\\htdocs\\blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
