<?php

/* :index:index.html.twig */
class __TwigTemplate_aace0c6c5a50c27dc22c09061dbda048128f1d791db496dbac0d01d007961e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":index:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_613a17cf5e6fd7937570711931c33d07e6b4024bd9bec73add3491198749f674 = $this->env->getExtension("native_profiler");
        $__internal_613a17cf5e6fd7937570711931c33d07e6b4024bd9bec73add3491198749f674->enter($__internal_613a17cf5e6fd7937570711931c33d07e6b4024bd9bec73add3491198749f674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_613a17cf5e6fd7937570711931c33d07e6b4024bd9bec73add3491198749f674->leave($__internal_613a17cf5e6fd7937570711931c33d07e6b4024bd9bec73add3491198749f674_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e947afa2319dd3605b16d51383ea0e85ba2df972b5669928c2ed9966f1b2cd0f = $this->env->getExtension("native_profiler");
        $__internal_e947afa2319dd3605b16d51383ea0e85ba2df972b5669928c2ed9966f1b2cd0f->enter($__internal_e947afa2319dd3605b16d51383ea0e85ba2df972b5669928c2ed9966f1b2cd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            <div>
                <span>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</span> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            </div>
            <div>
                <ul>
                    <li><a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("app_article_articles");
            echo "\">Articles</a> - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("app_article_new");
            echo "\">New Article</a></li>
                    <li><a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("app_tags_tags");
            echo "\">Tags</li>
                </ul>
            </div>
        ";
        } else {
            // line 16
            echo "            <span>You are anonymous</span> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a> - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 18
        echo "    </div>
";
        
        $__internal_e947afa2319dd3605b16d51383ea0e85ba2df972b5669928c2ed9966f1b2cd0f->leave($__internal_e947afa2319dd3605b16d51383ea0e85ba2df972b5669928c2ed9966f1b2cd0f_prof);

    }

    public function getTemplateName()
    {
        return ":index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  72 => 16,  65 => 12,  59 => 11,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*             <div>*/
/*                 <span>{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}</span> | <a href="{{ path('fos_user_security_logout') }}">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>*/
/*             </div>*/
/*             <div>*/
/*                 <ul>*/
/*                     <li><a href="{{ path('app_article_articles') }}">Articles</a> - <a href="{{ path('app_article_new') }}">New Article</a></li>*/
/*                     <li><a href="{{ path('app_tags_tags') }}">Tags</li>*/
/*                 </ul>*/
/*             </div>*/
/*         {% else %}*/
/*             <span>You are anonymous</span> | <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a> - <a href="{{ path('fos_user_registration_register') }}">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
