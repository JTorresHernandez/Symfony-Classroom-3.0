<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_70a7a8cc5138c1a8638b707f70c2ca6d6b7b15e78c4a6da91af71f07ac0fea04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_6a48fac817e18ff4c9cec5d3bb9a2e773c8fd44750da23dfd9f8bf677fefa716 = $this->env->getExtension("native_profiler");
        $__internal_6a48fac817e18ff4c9cec5d3bb9a2e773c8fd44750da23dfd9f8bf677fefa716->enter($__internal_6a48fac817e18ff4c9cec5d3bb9a2e773c8fd44750da23dfd9f8bf677fefa716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a48fac817e18ff4c9cec5d3bb9a2e773c8fd44750da23dfd9f8bf677fefa716->leave($__internal_6a48fac817e18ff4c9cec5d3bb9a2e773c8fd44750da23dfd9f8bf677fefa716_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_baa4d3c68f24d2e91787278eb70ba6cc7673bd5caeccca8a67f9384da834cdfc = $this->env->getExtension("native_profiler");
        $__internal_baa4d3c68f24d2e91787278eb70ba6cc7673bd5caeccca8a67f9384da834cdfc->enter($__internal_baa4d3c68f24d2e91787278eb70ba6cc7673bd5caeccca8a67f9384da834cdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_baa4d3c68f24d2e91787278eb70ba6cc7673bd5caeccca8a67f9384da834cdfc->leave($__internal_baa4d3c68f24d2e91787278eb70ba6cc7673bd5caeccca8a67f9384da834cdfc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
