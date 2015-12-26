<?php

/* UserBundle:Security:horitzontal-login.html.twig */
class __TwigTemplate_8468caa06b306de05c4d997daa21ac02827298cedb77f988f31efbce7490db81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9ac98c801b2ebbf8589f66294a736067b6cf5ef6cddaf346cb07213813e40f5 = $this->env->getExtension("native_profiler");
        $__internal_e9ac98c801b2ebbf8589f66294a736067b6cf5ef6cddaf346cb07213813e40f5->enter($__internal_e9ac98c801b2ebbf8589f66294a736067b6cf5ef6cddaf346cb07213813e40f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:horitzontal-login.html.twig"));

        // line 1
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "    <a class=\"btn btn-success\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Sign out</a>
    <a class=\"btn btn-danger\" href=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
";
        } elseif (((        // line 4
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) != "fos_user_security_login") && ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) != "fos_user_registration_register"))) {
            // line 5
            echo "    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
        <div class=\"form-group\">
            <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" required=\"required\" />
        </div>
        <div class=\"form-group\">
            <input class=\"form-control\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
        </div>
        <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
        <a class=\"btn btn-danger\" href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Sign up</a>
    </form>
";
        }
        
        $__internal_e9ac98c801b2ebbf8589f66294a736067b6cf5ef6cddaf346cb07213813e40f5->leave($__internal_e9ac98c801b2ebbf8589f66294a736067b6cf5ef6cddaf346cb07213813e40f5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:horitzontal-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  47 => 8,  42 => 6,  37 => 5,  35 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*     <a class="btn btn-success" href="{{ path('fos_user_security_logout') }}">Sign out</a>*/
/*     <a class="btn btn-danger" href="{{ path('fos_user_profile_show') }}">{{ app.user.username }}</a>*/
/* {% elseif route != 'fos_user_security_login' and route != 'fos_user_registration_register' %}*/
/*     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/*         <div class="form-group">*/
/*             <input class="form-control" placeholder="Username" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <input class="form-control" placeholder="Password" type="password" id="password" name="_password" required="required" />*/
/*         </div>*/
/*         <button type="submit" class="btn btn-success">Sign in</button>*/
/*         <a class="btn btn-danger" href="{{ path('fos_user_registration_register') }}">Sign up</a>*/
/*     </form>*/
/* {% endif %}*/
