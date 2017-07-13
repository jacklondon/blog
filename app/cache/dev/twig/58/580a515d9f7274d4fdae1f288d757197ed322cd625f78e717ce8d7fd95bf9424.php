<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_be8e544a295dfc145b11ce6e36b97137cf89a82f23b80ecea84d0607e94af583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5335674408c49f85904dbdec5c1c09200e06bf9a8635e8de266e2d1b949afdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5335674408c49f85904dbdec5c1c09200e06bf9a8635e8de266e2d1b949afdd7->enter($__internal_5335674408c49f85904dbdec5c1c09200e06bf9a8635e8de266e2d1b949afdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bundled.min.css"), "html", null, true);
        echo "\"/>
        <script href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bundled.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <header>
            <div class=\"navbar navbar-default navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">BLOG</a></div>
                    <div class=\"navbar-collapse\">
                        <ul class=\"navbar navbar-nav navbar-right\">

                        </ul>
                    </div>


                </div>

            </div>
        </header>

        <div class=\"container body-container\">
            ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 33
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 35
        echo "

            ";
        // line 37
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 38
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 39
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 40
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 41
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            ";
        }
        // line 46
        echo "
            <div>
                ";
        // line 48
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 50
        echo "            </div>
        </div>

    </body>
</html>
";
        
        $__internal_5335674408c49f85904dbdec5c1c09200e06bf9a8635e8de266e2d1b949afdd7->leave($__internal_5335674408c49f85904dbdec5c1c09200e06bf9a8635e8de266e2d1b949afdd7_prof);

    }

    // line 48
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1d464f95b7c49302b6966fb6fdfa0bbe69fd3a90648da89b8b0d0f45a7d70b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d464f95b7c49302b6966fb6fdfa0bbe69fd3a90648da89b8b0d0f45a7d70b0->enter($__internal_f1d464f95b7c49302b6966fb6fdfa0bbe69fd3a90648da89b8b0d0f45a7d70b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 49
        echo "                ";
        
        $__internal_f1d464f95b7c49302b6966fb6fdfa0bbe69fd3a90648da89b8b0d0f45a7d70b0->leave($__internal_f1d464f95b7c49302b6966fb6fdfa0bbe69fd3a90648da89b8b0d0f45a7d70b0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 49,  145 => 48,  133 => 50,  131 => 48,  127 => 46,  124 => 45,  118 => 44,  109 => 41,  104 => 40,  99 => 39,  94 => 38,  92 => 37,  88 => 35,  80 => 33,  74 => 30,  70 => 29,  65 => 28,  63 => 27,  46 => 13,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bundled.min.css') }}\"/>
        <script href=\"{{ asset('assets/js/bundled.min.js') }}\"></script>
    </head>
    <body>
        <header>
            <div class=\"navbar navbar-default navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\"><a href=\"{{ path('homepage') }}\">BLOG</a></div>
                    <div class=\"navbar-collapse\">
                        <ul class=\"navbar navbar-nav navbar-right\">

                        </ul>
                    </div>


                </div>

            </div>
        </header>

        <div class=\"container body-container\">
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}


            {% if app.request.hasPreviousSession %}
                {% for type, messages in app.session.flashbag.all() %}
                    {% for message in messages %}
                        <div class=\"flash-{{ type }}\">
                            {{ message }}
                        </div>
                    {% endfor %}
                {% endfor %}
            {% endif %}

            <div>
                {% block fos_user_content %}
                {% endblock fos_user_content %}
            </div>
        </div>

    </body>
</html>
", "@FOSUser/layout.html.twig", "F:\\xampp\\htdocs\\blog\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\layout.html.twig");
    }
}
