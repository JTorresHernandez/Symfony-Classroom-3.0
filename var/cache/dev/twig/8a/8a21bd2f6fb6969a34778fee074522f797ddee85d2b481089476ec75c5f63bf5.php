<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_4e826f64bb102aefc2270278c088d5b97bba3c1e3b18804968a4112656ead8c2 extends Twig_Template
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
        $__internal_3122e317b5255f5ffe4e2f9b9fa75b3685fb3be8a8dbb9e19e7c9d5a2a9f4fbf = $this->env->getExtension("native_profiler");
        $__internal_3122e317b5255f5ffe4e2f9b9fa75b3685fb3be8a8dbb9e19e7c9d5a2a9f4fbf->enter($__internal_3122e317b5255f5ffe4e2f9b9fa75b3685fb3be8a8dbb9e19e7c9d5a2a9f4fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_3122e317b5255f5ffe4e2f9b9fa75b3685fb3be8a8dbb9e19e7c9d5a2a9f4fbf->leave($__internal_3122e317b5255f5ffe4e2f9b9fa75b3685fb3be8a8dbb9e19e7c9d5a2a9f4fbf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
