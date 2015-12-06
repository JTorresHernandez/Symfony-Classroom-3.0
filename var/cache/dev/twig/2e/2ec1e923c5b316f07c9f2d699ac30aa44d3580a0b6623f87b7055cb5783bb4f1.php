<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_9e1983c77f08b78c7f13efd44583d2b618700a2dbfffe55e46088ecfe77cbc2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd825d59c6d187008952febf99777a2d90b95f7ea6c0769521177111e84a85c0 = $this->env->getExtension("native_profiler");
        $__internal_cd825d59c6d187008952febf99777a2d90b95f7ea6c0769521177111e84a85c0->enter($__internal_cd825d59c6d187008952febf99777a2d90b95f7ea6c0769521177111e84a85c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd825d59c6d187008952febf99777a2d90b95f7ea6c0769521177111e84a85c0->leave($__internal_cd825d59c6d187008952febf99777a2d90b95f7ea6c0769521177111e84a85c0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa3e995056e510f6a802e31a8fd491a5c19675a1918e5884b3da2e9649238a2f = $this->env->getExtension("native_profiler");
        $__internal_aa3e995056e510f6a802e31a8fd491a5c19675a1918e5884b3da2e9649238a2f->enter($__internal_aa3e995056e510f6a802e31a8fd491a5c19675a1918e5884b3da2e9649238a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <div>
        <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>

    <div>
        <label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>

    <div>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_aa3e995056e510f6a802e31a8fd491a5c19675a1918e5884b3da2e9649238a2f->leave($__internal_aa3e995056e510f6a802e31a8fd491a5c19675a1918e5884b3da2e9649238a2f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  81 => 25,  72 => 19,  65 => 15,  61 => 14,  55 => 11,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <div>*/
/*         <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*     </div>*/
/* */
/*     <div>*/
/*         <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*         <input type="password" id="password" name="_password" required="required" />*/
/*     </div>*/
/* */
/*     <div>*/
/*         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*     </div>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
/* */
/* */
