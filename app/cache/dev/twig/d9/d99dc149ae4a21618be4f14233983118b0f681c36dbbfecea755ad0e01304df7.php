<?php

/* default/index.html.twig */
class __TwigTemplate_6fcfd935de5fa3a6ff5679041a2ed217c57e4e03d971af3266d36964052eb8b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_bad30cac804cb6a11feaea959a06d419fedefb78f78c6b2488002268b8e7756c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad30cac804cb6a11feaea959a06d419fedefb78f78c6b2488002268b8e7756c->enter($__internal_bad30cac804cb6a11feaea959a06d419fedefb78f78c6b2488002268b8e7756c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bad30cac804cb6a11feaea959a06d419fedefb78f78c6b2488002268b8e7756c->leave($__internal_bad30cac804cb6a11feaea959a06d419fedefb78f78c6b2488002268b8e7756c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d4789b97181ff4ab616122ed0f61ebf86f3fc7f1bd8056c7f168c7d3040a933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4789b97181ff4ab616122ed0f61ebf86f3fc7f1bd8056c7f168c7d3040a933->enter($__internal_8d4789b97181ff4ab616122ed0f61ebf86f3fc7f1bd8056c7f168c7d3040a933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"main\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 7
            echo "        <div class=\"row\"></div>
            <article>
                <h2><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_post", array("slug" => $this->getAttribute($context["k"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "title", array()), "html", null, true);
            echo "</a></h2>
                <p class=\"\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["k"], "content", array()), 0, 500), "html", null, true);
            echo "
                </p>
                <p class=\"mdata pull-right\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["k"], "users", array()), "username", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["k"], "createdAt", array())), "html", null, true);
            echo "
                </p>
            </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </div>
    </div>
";
        
        $__internal_8d4789b97181ff4ab616122ed0f61ebf86f3fc7f1bd8056c7f168c7d3040a933->leave($__internal_8d4789b97181ff4ab616122ed0f61ebf86f3fc7f1bd8056c7f168c7d3040a933_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  65 => 14,  59 => 11,  52 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    {% for k in data %}
        <div class=\"row\"></div>
            <article>
                <h2><a href=\"{{ path('blog_post', {slug: k.slug}) }}\">{{ k.title }}</a></h2>
                <p class=\"\">
                    {{ k.content|slice(0,500) }}
                </p>
                <p class=\"mdata pull-right\">
                    {{ k.users.username }} - {{ k.createdAt|date }}
                </p>
            </article>
    {% endfor %}
        </div>
    </div>
{% endblock %}

", "default/index.html.twig", "F:\\xampp\\htdocs\\blog\\app\\Resources\\views\\default\\index.html.twig");
    }
}
