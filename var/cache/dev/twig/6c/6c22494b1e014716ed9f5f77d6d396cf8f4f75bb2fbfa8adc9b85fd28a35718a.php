<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_cb5165d205170c4b65f4749a40d5769050f795617131343a429a628940e92375 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_f581107a57a8a6494bcf7ef00f4bfeccf81f00d2b67e0deb5890935cdee561ad = $this->env->getExtension("native_profiler");
        $__internal_f581107a57a8a6494bcf7ef00f4bfeccf81f00d2b67e0deb5890935cdee561ad->enter($__internal_f581107a57a8a6494bcf7ef00f4bfeccf81f00d2b67e0deb5890935cdee561ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f581107a57a8a6494bcf7ef00f4bfeccf81f00d2b67e0deb5890935cdee561ad->leave($__internal_f581107a57a8a6494bcf7ef00f4bfeccf81f00d2b67e0deb5890935cdee561ad_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c713a51def0fa91ce045b0562ce7cd90b9f7223e286056677993d932f3b217aa = $this->env->getExtension("native_profiler");
        $__internal_c713a51def0fa91ce045b0562ce7cd90b9f7223e286056677993d932f3b217aa->enter($__internal_c713a51def0fa91ce045b0562ce7cd90b9f7223e286056677993d932f3b217aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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

    <div class=\"form-group\">
        <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>

    <div class=\"form-group\">
        <label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>

    <div class=\"checkbox\">
        <label for=\"remember_me\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
        </label>
    </div>

    <input class=\"btn btn-default\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_c713a51def0fa91ce045b0562ce7cd90b9f7223e286056677993d932f3b217aa->leave($__internal_c713a51def0fa91ce045b0562ce7cd90b9f7223e286056677993d932f3b217aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  81 => 25,  72 => 19,  65 => 15,  61 => 14,  55 => 11,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
/*     <div class="form-group">*/
/*         <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*         <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*         <input type="password" class="form-control" id="password" name="_password" required="required" />*/
/*     </div>*/
/* */
/*     <div class="checkbox">*/
/*         <label for="remember_me">*/
/*             <input type="checkbox" id="remember_me" name="_remember_me" value="on" /> {{ 'security.login.remember_me'|trans }}*/
/*         </label>*/
/*     </div>*/
/* */
/*     <input class="btn btn-default" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
