<?php

/* UserBundle:Security:horitzontal-login.html.twig */
class __TwigTemplate_812cbbae5eefc412dab61a0fe0f397c9815ef636c704de6622356481fc5867f2 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        return array (  38 => 10,  29 => 4,  24 => 2,  19 => 1,);
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
