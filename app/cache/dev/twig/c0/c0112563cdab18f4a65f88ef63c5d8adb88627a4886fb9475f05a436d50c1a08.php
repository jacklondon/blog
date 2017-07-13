<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e94e18f707bfa009ff8c2b285e1ea00b895a0fcab6c330791448500763b4a559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_95d418b6a908a68a2950052e8df580b0507b8779b94a3072de7c43d292dad56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d418b6a908a68a2950052e8df580b0507b8779b94a3072de7c43d292dad56e->enter($__internal_95d418b6a908a68a2950052e8df580b0507b8779b94a3072de7c43d292dad56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95d418b6a908a68a2950052e8df580b0507b8779b94a3072de7c43d292dad56e->leave($__internal_95d418b6a908a68a2950052e8df580b0507b8779b94a3072de7c43d292dad56e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2dcf6b09ed4f8b4ec657b49a19352916f581f4ad03ce83b4650cf8d082317def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcf6b09ed4f8b4ec657b49a19352916f581f4ad03ce83b4650cf8d082317def->enter($__internal_2dcf6b09ed4f8b4ec657b49a19352916f581f4ad03ce83b4650cf8d082317def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2dcf6b09ed4f8b4ec657b49a19352916f581f4ad03ce83b4650cf8d082317def->leave($__internal_2dcf6b09ed4f8b4ec657b49a19352916f581f4ad03ce83b4650cf8d082317def_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "F:\\xampp\\htdocs\\blog\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
