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
        $__internal_9b32475fa8e1d7f3b6e6c0836a761fd5f7451d7d05fd217a268c8e57b3d2f5fd = $this->env->getExtension("native_profiler");
        $__internal_9b32475fa8e1d7f3b6e6c0836a761fd5f7451d7d05fd217a268c8e57b3d2f5fd->enter($__internal_9b32475fa8e1d7f3b6e6c0836a761fd5f7451d7d05fd217a268c8e57b3d2f5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b32475fa8e1d7f3b6e6c0836a761fd5f7451d7d05fd217a268c8e57b3d2f5fd->leave($__internal_9b32475fa8e1d7f3b6e6c0836a761fd5f7451d7d05fd217a268c8e57b3d2f5fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2c4091f92558225c50fe07f8bbdd02627d9ba1c37c64e1e55bfb632a98aa48c = $this->env->getExtension("native_profiler");
        $__internal_a2c4091f92558225c50fe07f8bbdd02627d9ba1c37c64e1e55bfb632a98aa48c->enter($__internal_a2c4091f92558225c50fe07f8bbdd02627d9ba1c37c64e1e55bfb632a98aa48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2c4091f92558225c50fe07f8bbdd02627d9ba1c37c64e1e55bfb632a98aa48c->leave($__internal_a2c4091f92558225c50fe07f8bbdd02627d9ba1c37c64e1e55bfb632a98aa48c_prof);

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
