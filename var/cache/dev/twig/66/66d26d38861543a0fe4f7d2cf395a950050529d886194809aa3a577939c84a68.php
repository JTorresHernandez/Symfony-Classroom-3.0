<?php

/* :index:index.html.twig */
class __TwigTemplate_17b3c3e785ccd4d4e71dba8497c6854f10befce4ce65f41d2cd1b93292d7d86a extends Twig_Template
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
        $__internal_529974d7acfb0832586f4e391a47dddfedd635e2710af7b1ae3ce7cdb949e6b6 = $this->env->getExtension("native_profiler");
        $__internal_529974d7acfb0832586f4e391a47dddfedd635e2710af7b1ae3ce7cdb949e6b6->enter($__internal_529974d7acfb0832586f4e391a47dddfedd635e2710af7b1ae3ce7cdb949e6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529974d7acfb0832586f4e391a47dddfedd635e2710af7b1ae3ce7cdb949e6b6->leave($__internal_529974d7acfb0832586f4e391a47dddfedd635e2710af7b1ae3ce7cdb949e6b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8402a8aa5ba2168d290b382e6af0753330908fd13cd6b9f1ff080818ce4fdec3 = $this->env->getExtension("native_profiler");
        $__internal_8402a8aa5ba2168d290b382e6af0753330908fd13cd6b9f1ff080818ce4fdec3->enter($__internal_8402a8aa5ba2168d290b382e6af0753330908fd13cd6b9f1ff080818ce4fdec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</span> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 8
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
        // line 10
        echo "    </div>
";
        
        $__internal_8402a8aa5ba2168d290b382e6af0753330908fd13cd6b9f1ff080818ce4fdec3->leave($__internal_8402a8aa5ba2168d290b382e6af0753330908fd13cd6b9f1ff080818ce4fdec3_prof);

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
        return array (  67 => 10,  55 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*             <span>{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}</span> | <a href="{{ path('fos_user_security_logout') }}">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>*/
/*         {% else %}*/
/*             <span>You are anonymous</span> | <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a> - <a href="{{ path('fos_user_registration_register') }}">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
