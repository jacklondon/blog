<?php

/* admin/index.html.twig */
class __TwigTemplate_d2c585f4249e0ad9013dd93e0669b8ec27551d32da9ce040c64e6ed5fa487cee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_31748038c5904beaf04cd78bf6d0a675a78bbe094f6a659c65a721e96c0f90b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31748038c5904beaf04cd78bf6d0a675a78bbe094f6a659c65a721e96c0f90b0->enter($__internal_31748038c5904beaf04cd78bf6d0a675a78bbe094f6a659c65a721e96c0f90b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31748038c5904beaf04cd78bf6d0a675a78bbe094f6a659c65a721e96c0f90b0->leave($__internal_31748038c5904beaf04cd78bf6d0a675a78bbe094f6a659c65a721e96c0f90b0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f69a8f4e64da83f121f4c998ed2e09b2043fa268258686415c0fe76a6082cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f69a8f4e64da83f121f4c998ed2e09b2043fa268258686415c0fe76a6082cba->enter($__internal_5f69a8f4e64da83f121f4c998ed2e09b2043fa268258686415c0fe76a6082cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <table class=\"table\">
        <thead>
        <tr>
            <th>Başlık</th>
            <th>Kullanıcı</th>
            <th>Tarih</th>
            <th>Düzenle</th>
            <th>Sil</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["k"], "users", array()), "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["k"], "createdAt", array())), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_content", array("id" => $this->getAttribute($context["k"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-block btn-default\">Düzenle</a></td>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_content", array("id" => $this->getAttribute($context["k"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-block btn-danger\">Sil</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>
    <p>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_content");
        echo "\" class=\"btn btn-lg btn-block btn-success\">Blog Ekle</a>
    </p>
";
        
        $__internal_5f69a8f4e64da83f121f4c998ed2e09b2043fa268258686415c0fe76a6082cba->leave($__internal_5f69a8f4e64da83f121f4c998ed2e09b2043fa268258686415c0fe76a6082cba_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  86 => 24,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  58 => 16,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
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

    <table class=\"table\">
        <thead>
        <tr>
            <th>Başlık</th>
            <th>Kullanıcı</th>
            <th>Tarih</th>
            <th>Düzenle</th>
            <th>Sil</th>
        </tr>
        </thead>
        <tbody>
        {% for k in data %}
            <tr>
                <td>{{ k.title }}</td>
                <td>{{ k.users.username }}</td>
                <td>{{ k.createdAt|date }}</td>
                <td><a href=\"{{ path('edit_content',{id:k.id}) }}\" class=\"btn btn-block btn-default\">Düzenle</a></td>
                <td><a href=\"{{ path('delete_content',{id:k.id}) }}\" class=\"btn btn-block btn-danger\">Sil</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <p>
        <a href=\"{{ path(\"add_content\") }}\" class=\"btn btn-lg btn-block btn-success\">Blog Ekle</a>
    </p>
{% endblock %}", "admin/index.html.twig", "F:\\xampp\\htdocs\\blog\\app\\Resources\\views\\admin\\index.html.twig");
    }
}
