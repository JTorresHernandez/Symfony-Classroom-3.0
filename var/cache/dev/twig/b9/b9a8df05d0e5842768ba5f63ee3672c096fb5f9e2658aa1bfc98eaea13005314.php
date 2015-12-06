<?php

/* :index:index.html.twig */
class __TwigTemplate_447437d2a50cb51860920e005fe369ce4f825eaa3e99214de2e416f31f122220 extends Twig_Template
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
        $__internal_b7dc5f787aa35cbb95a7142f5d3180175d09227ce336152ac79011aa3e9d7c2c = $this->env->getExtension("native_profiler");
        $__internal_b7dc5f787aa35cbb95a7142f5d3180175d09227ce336152ac79011aa3e9d7c2c->enter($__internal_b7dc5f787aa35cbb95a7142f5d3180175d09227ce336152ac79011aa3e9d7c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7dc5f787aa35cbb95a7142f5d3180175d09227ce336152ac79011aa3e9d7c2c->leave($__internal_b7dc5f787aa35cbb95a7142f5d3180175d09227ce336152ac79011aa3e9d7c2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b610a84e1ce8153f4ac06ac85b3cab03472d344dadd31d2fd116a1adf87413e4 = $this->env->getExtension("native_profiler");
        $__internal_b610a84e1ce8153f4ac06ac85b3cab03472d344dadd31d2fd116a1adf87413e4->enter($__internal_b610a84e1ce8153f4ac06ac85b3cab03472d344dadd31d2fd116a1adf87413e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b610a84e1ce8153f4ac06ac85b3cab03472d344dadd31d2fd116a1adf87413e4->leave($__internal_b610a84e1ce8153f4ac06ac85b3cab03472d344dadd31d2fd116a1adf87413e4_prof);

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
