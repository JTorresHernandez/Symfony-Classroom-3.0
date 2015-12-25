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
        $__internal_a84d27fd4c2a5689a251708f27955f7b70236fe3597bff2a5382f4ff18270fec = $this->env->getExtension("native_profiler");
        $__internal_a84d27fd4c2a5689a251708f27955f7b70236fe3597bff2a5382f4ff18270fec->enter($__internal_a84d27fd4c2a5689a251708f27955f7b70236fe3597bff2a5382f4ff18270fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a84d27fd4c2a5689a251708f27955f7b70236fe3597bff2a5382f4ff18270fec->leave($__internal_a84d27fd4c2a5689a251708f27955f7b70236fe3597bff2a5382f4ff18270fec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d47df0e0d9c0612da02dcc826a8940e5a17054825f11d4c1dc3a95c5dae42b9 = $this->env->getExtension("native_profiler");
        $__internal_2d47df0e0d9c0612da02dcc826a8940e5a17054825f11d4c1dc3a95c5dae42b9->enter($__internal_2d47df0e0d9c0612da02dcc826a8940e5a17054825f11d4c1dc3a95c5dae42b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_2d47df0e0d9c0612da02dcc826a8940e5a17054825f11d4c1dc3a95c5dae42b9->leave($__internal_2d47df0e0d9c0612da02dcc826a8940e5a17054825f11d4c1dc3a95c5dae42b9_prof);

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
