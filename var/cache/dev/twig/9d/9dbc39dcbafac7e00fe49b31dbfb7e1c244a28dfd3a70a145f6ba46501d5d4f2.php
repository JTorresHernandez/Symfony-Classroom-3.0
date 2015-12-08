<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_104b4a0495207ee6fb824ce9af2cc037659c4c02378989a264bdb1396f96069f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_0d4622e92e59f97d7a5d438550f74816eb278bfe712b1fcb758e6dc61d652148 = $this->env->getExtension("native_profiler");
        $__internal_0d4622e92e59f97d7a5d438550f74816eb278bfe712b1fcb758e6dc61d652148->enter($__internal_0d4622e92e59f97d7a5d438550f74816eb278bfe712b1fcb758e6dc61d652148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d4622e92e59f97d7a5d438550f74816eb278bfe712b1fcb758e6dc61d652148->leave($__internal_0d4622e92e59f97d7a5d438550f74816eb278bfe712b1fcb758e6dc61d652148_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c118f5f49b6c5b587fc7e865bdf64b5bba113c33bfd2f990069e17a2cd39b6c9 = $this->env->getExtension("native_profiler");
        $__internal_c118f5f49b6c5b587fc7e865bdf64b5bba113c33bfd2f990069e17a2cd39b6c9->enter($__internal_c118f5f49b6c5b587fc7e865bdf64b5bba113c33bfd2f990069e17a2cd39b6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_c118f5f49b6c5b587fc7e865bdf64b5bba113c33bfd2f990069e17a2cd39b6c9->leave($__internal_c118f5f49b6c5b587fc7e865bdf64b5bba113c33bfd2f990069e17a2cd39b6c9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
