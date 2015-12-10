<?php

/* FOSUserBundle:Security:horitzontal-login.html.twig */
class __TwigTemplate_a822c2a53bf28c1ea72e71fe2480ea00ee359ef6fb5fa4b499f18aede306813f extends Twig_Template
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
        $__internal_122d24ca29526fb23e7ca715d84369192ffa744b10ce6a3b9e12b03970cd22b8 = $this->env->getExtension("native_profiler");
        $__internal_122d24ca29526fb23e7ca715d84369192ffa744b10ce6a3b9e12b03970cd22b8->enter($__internal_122d24ca29526fb23e7ca715d84369192ffa744b10ce6a3b9e12b03970cd22b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:horitzontal-login.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <div class=\"form-group\">
        <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"\" required=\"required\" />
    </div>
    <div class=\"form-group\">
        <input class=\"form-control\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
    <a class=\"btn btn-danger\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Sign up</a>
</form>";
        
        $__internal_122d24ca29526fb23e7ca715d84369192ffa744b10ce6a3b9e12b03970cd22b8->leave($__internal_122d24ca29526fb23e7ca715d84369192ffa744b10ce6a3b9e12b03970cd22b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:horitzontal-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  22 => 1,);
    }
}
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <div class="form-group">*/
/*         <input class="form-control" placeholder="Username" type="text" id="username" name="_username" value="" required="required" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <input class="form-control" placeholder="Password" type="password" id="password" name="_password" required="required" />*/
/*     </div>*/
/*     <button type="submit" class="btn btn-success">Sign in</button>*/
/*     <a class="btn btn-danger" href="{{ path('fos_user_registration_register') }}">Sign up</a>*/
/* </form>*/
