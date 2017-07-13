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
        $__internal_18bddd1f6e81c35999984bff730ec05f443a62a98c450fc9c14be4dd23c72dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bddd1f6e81c35999984bff730ec05f443a62a98c450fc9c14be4dd23c72dd6->enter($__internal_18bddd1f6e81c35999984bff730ec05f443a62a98c450fc9c14be4dd23c72dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\"/>
        <script href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <header>
            <div class=\"navbar navbar-default navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\"><a href=\"";
        // line 14
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
        // line 28
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 29
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 34
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 36
        echo "

            ";
        // line 38
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 39
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 40
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 41
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 42
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            ";
        }
        // line 47
        echo "
            <div>
                ";
        // line 49
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 51
        echo "            </div>
        </div>

    </body>
</html>
";
        
        $__internal_18bddd1f6e81c35999984bff730ec05f443a62a98c450fc9c14be4dd23c72dd6->leave($__internal_18bddd1f6e81c35999984bff730ec05f443a62a98c450fc9c14be4dd23c72dd6_prof);

    }

    // line 49
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40ef61abe4077cbad8004ec371ccebdb8c88f5f438b168fe41aa028138f909ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ef61abe4077cbad8004ec371ccebdb8c88f5f438b168fe41aa028138f909ac->enter($__internal_40ef61abe4077cbad8004ec371ccebdb8c88f5f438b168fe41aa028138f909ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 50
        echo "                ";
        
        $__internal_40ef61abe4077cbad8004ec371ccebdb8c88f5f438b168fe41aa028138f909ac->leave($__internal_40ef61abe4077cbad8004ec371ccebdb8c88f5f438b168fe41aa028138f909ac_prof);

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
        return array (  155 => 50,  149 => 49,  137 => 51,  135 => 49,  131 => 47,  128 => 46,  122 => 45,  113 => 42,  108 => 41,  103 => 40,  98 => 39,  96 => 38,  92 => 36,  84 => 34,  78 => 31,  74 => 30,  69 => 29,  67 => 28,  50 => 14,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/dist/css/bootstrap.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\"/>
        <script href=\"{{ asset('assets/jquery/dist/jquery.min.js') }}\"></script>
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
