<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_adda245088750acff59221f7a7126210cfde5678f30e9ab7b3c2b73422f0e0a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_415dca80180172c656ca86b4b61f23069ead4220cfb4a5707a5e8fa170520bf8 = $this->env->getExtension("native_profiler");
        $__internal_415dca80180172c656ca86b4b61f23069ead4220cfb4a5707a5e8fa170520bf8->enter($__internal_415dca80180172c656ca86b4b61f23069ead4220cfb4a5707a5e8fa170520bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_415dca80180172c656ca86b4b61f23069ead4220cfb4a5707a5e8fa170520bf8->leave($__internal_415dca80180172c656ca86b4b61f23069ead4220cfb4a5707a5e8fa170520bf8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be0893742330ca98677201fb29ae3b9f7679c7ba49f1c30c3b849636f9d0ad31 = $this->env->getExtension("native_profiler");
        $__internal_be0893742330ca98677201fb29ae3b9f7679c7ba49f1c30c3b849636f9d0ad31->enter($__internal_be0893742330ca98677201fb29ae3b9f7679c7ba49f1c30c3b849636f9d0ad31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_be0893742330ca98677201fb29ae3b9f7679c7ba49f1c30c3b849636f9d0ad31->leave($__internal_be0893742330ca98677201fb29ae3b9f7679c7ba49f1c30c3b849636f9d0ad31_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
