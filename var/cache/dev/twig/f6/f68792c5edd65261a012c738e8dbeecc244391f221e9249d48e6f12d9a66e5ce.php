<?php

/* UserBundle:Profile:show_content.html.twig */
class __TwigTemplate_8e2c21224770cb34f5c280340642431b106d85e87ead339b864699a6ecfdcf03 extends Twig_Template
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
        $__internal_13881196513fa48fde1874fe120a07f56b30d8df6db2028a69bc7347f9e5ea29 = $this->env->getExtension("native_profiler");
        $__internal_13881196513fa48fde1874fe120a07f56b30d8df6db2028a69bc7347f9e5ea29->enter($__internal_13881196513fa48fde1874fe120a07f56b30d8df6db2028a69bc7347f9e5ea29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_13881196513fa48fde1874fe120a07f56b30d8df6db2028a69bc7347f9e5ea29->leave($__internal_13881196513fa48fde1874fe120a07f56b30d8df6db2028a69bc7347f9e5ea29_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */