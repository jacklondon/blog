<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_d4c7e4860a9f8c041f875dd68628c87e3838fc8d1fdb56985f0d00d6324a5969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45181d83c6f22a5021b09f9b5613b10c02edd91c7052f9c97d20f6205b165b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45181d83c6f22a5021b09f9b5613b10c02edd91c7052f9c97d20f6205b165b41->enter($__internal_45181d83c6f22a5021b09f9b5613b10c02edd91c7052f9c97d20f6205b165b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45181d83c6f22a5021b09f9b5613b10c02edd91c7052f9c97d20f6205b165b41->leave($__internal_45181d83c6f22a5021b09f9b5613b10c02edd91c7052f9c97d20f6205b165b41_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43cf7e04afe0f1543be0a1baa8de9cc2a2e6d2f437a174121047e328c38914cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cf7e04afe0f1543be0a1baa8de9cc2a2e6d2f437a174121047e328c38914cb->enter($__internal_43cf7e04afe0f1543be0a1baa8de9cc2a2e6d2f437a174121047e328c38914cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_43cf7e04afe0f1543be0a1baa8de9cc2a2e6d2f437a174121047e328c38914cb->leave($__internal_43cf7e04afe0f1543be0a1baa8de9cc2a2e6d2f437a174121047e328c38914cb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "F:\\xampp\\htdocs\\blog\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
