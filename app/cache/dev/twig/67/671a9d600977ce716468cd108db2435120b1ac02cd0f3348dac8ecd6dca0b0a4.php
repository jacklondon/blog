<?php

/* base.html.twig */
class __TwigTemplate_28eaa8cffbcf9d3f08ace46230f691a6a1e44cfae421109761d49cbf7e466e8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00a5fc8c5759f22f31b6bf3713aabd262fe8a5dec99d268e86708a4fd2efa6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a5fc8c5759f22f31b6bf3713aabd262fe8a5dec99d268e86708a4fd2efa6d1->enter($__internal_00a5fc8c5759f22f31b6bf3713aabd262fe8a5dec99d268e86708a4fd2efa6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bundled.min.css"), "html", null, true);
        echo "\"/>
    <script href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bundled.min.jsgit"), "html", null, true);
        echo "\"></script>
</head>
<body>
<header>
    <div class=\"navbar navbar-default navbar-static-top\">
        <div class=\"container\">
            <div class=\"navbar-header\"><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">BLOG</a></div>
            <div class=\"navbar-collapse\">
                <ul class=\"navbar navbar-nav navbar-right\">
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_home");
        echo "\">ADMIN</a></li>
                    ";
        // line 19
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 20
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">LOGOUT</a></li>
                    ";
        } else {
            // line 22
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">LOGIN</a> </li>
                    ";
        }
        // line 24
        echo "

                </ul>
            </div>


        </div>

    </div>
</header>
<div class=\"container body-container\">
    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "</div>

";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "</body>
</html>
";
        
        $__internal_00a5fc8c5759f22f31b6bf3713aabd262fe8a5dec99d268e86708a4fd2efa6d1->leave($__internal_00a5fc8c5759f22f31b6bf3713aabd262fe8a5dec99d268e86708a4fd2efa6d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c94029eae917e6f79f448baffb0c76ad9d884d7c3e2f2c49147ef3f2df42bf53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94029eae917e6f79f448baffb0c76ad9d884d7c3e2f2c49147ef3f2df42bf53->enter($__internal_c94029eae917e6f79f448baffb0c76ad9d884d7c3e2f2c49147ef3f2df42bf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c94029eae917e6f79f448baffb0c76ad9d884d7c3e2f2c49147ef3f2df42bf53->leave($__internal_c94029eae917e6f79f448baffb0c76ad9d884d7c3e2f2c49147ef3f2df42bf53_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c1a0ac9024214348f4da60801524f1f59f9813492f7a85194bd1a8f0b490a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1a0ac9024214348f4da60801524f1f59f9813492f7a85194bd1a8f0b490a7a->enter($__internal_8c1a0ac9024214348f4da60801524f1f59f9813492f7a85194bd1a8f0b490a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8c1a0ac9024214348f4da60801524f1f59f9813492f7a85194bd1a8f0b490a7a->leave($__internal_8c1a0ac9024214348f4da60801524f1f59f9813492f7a85194bd1a8f0b490a7a_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_69cda28343698881ba0a244470a4f077edb7ca07d9007c4b727b72780f763bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cda28343698881ba0a244470a4f077edb7ca07d9007c4b727b72780f763bdf->enter($__internal_69cda28343698881ba0a244470a4f077edb7ca07d9007c4b727b72780f763bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_69cda28343698881ba0a244470a4f077edb7ca07d9007c4b727b72780f763bdf->leave($__internal_69cda28343698881ba0a244470a4f077edb7ca07d9007c4b727b72780f763bdf_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b0f47e6d88a852c31ff4b78570ede8e696f65b2cec17608e99758ec12465e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0f47e6d88a852c31ff4b78570ede8e696f65b2cec17608e99758ec12465e24->enter($__internal_3b0f47e6d88a852c31ff4b78570ede8e696f65b2cec17608e99758ec12465e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3b0f47e6d88a852c31ff4b78570ede8e696f65b2cec17608e99758ec12465e24->leave($__internal_3b0f47e6d88a852c31ff4b78570ede8e696f65b2cec17608e99758ec12465e24_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 38,  133 => 35,  122 => 6,  110 => 5,  101 => 39,  99 => 38,  95 => 36,  93 => 35,  80 => 24,  74 => 22,  68 => 20,  66 => 19,  62 => 18,  56 => 15,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bundled.min.css') }}\"/>
    <script href=\"{{ asset('assets/js/bundled.min.jsgit') }}\"></script>
</head>
<body>
<header>
    <div class=\"navbar navbar-default navbar-static-top\">
        <div class=\"container\">
            <div class=\"navbar-header\"><a href=\"{{ path('homepage') }}\">BLOG</a></div>
            <div class=\"navbar-collapse\">
                <ul class=\"navbar navbar-nav navbar-right\">
                    <li><a href=\"{{ path('admin_home') }}\">ADMIN</a></li>
                    {% if app.user %}
                        <li><a href=\"{{ path('fos_user_security_logout') }}\">LOGOUT</a></li>
                    {% else %}
                        <li><a href=\"{{ path('fos_user_security_login') }}\">LOGIN</a> </li>
                    {% endif %}


                </ul>
            </div>


        </div>

    </div>
</header>
<div class=\"container body-container\">
    {% block body %}{% endblock %}
</div>

{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "F:\\xampp\\htdocs\\blog\\app\\Resources\\views\\base.html.twig");
    }
}
