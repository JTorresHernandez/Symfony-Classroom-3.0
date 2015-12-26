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
        $__internal_c539eb9782d777a9e1e6ae8e13841f711e0154174e8e005a7fb8f5d2bede650d = $this->env->getExtension("native_profiler");
        $__internal_c539eb9782d777a9e1e6ae8e13841f711e0154174e8e005a7fb8f5d2bede650d->enter($__internal_c539eb9782d777a9e1e6ae8e13841f711e0154174e8e005a7fb8f5d2bede650d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:horitzontal-login.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
    <div class=\"form-group\">
        <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>
    <div class=\"form-group\">
        <input class=\"form-control\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
    <a class=\"btn btn-danger\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Sign up</a>
</form>";
        
        $__internal_c539eb9782d777a9e1e6ae8e13841f711e0154174e8e005a7fb8f5d2bede650d->leave($__internal_c539eb9782d777a9e1e6ae8e13841f711e0154174e8e005a7fb8f5d2bede650d_prof);

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
        return array (  41 => 10,  32 => 4,  27 => 2,  22 => 1,);
    }
}
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/*     <div class="form-group">*/
/*         <input class="form-control" placeholder="Username" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <input class="form-control" placeholder="Password" type="password" id="password" name="_password" required="required" />*/
/*     </div>*/
/*     <button type="submit" class="btn btn-success">Sign in</button>*/
/*     <a class="btn btn-danger" href="{{ path('fos_user_registration_register') }}">Sign up</a>*/
/* </form>*/
