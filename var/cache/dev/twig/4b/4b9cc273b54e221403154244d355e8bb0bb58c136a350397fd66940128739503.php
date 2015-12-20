<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_e4c3e52fa87db7347ce62a25ce06b30cfa1b8deb2edd8f872a33dcdafbf8bc42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6001d0179575bf1d0689e02f5dab8fcf8871cce7b92701d754a1a79fcde9fce6 = $this->env->getExtension("native_profiler");
        $__internal_6001d0179575bf1d0689e02f5dab8fcf8871cce7b92701d754a1a79fcde9fce6->enter($__internal_6001d0179575bf1d0689e02f5dab8fcf8871cce7b92701d754a1a79fcde9fce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6001d0179575bf1d0689e02f5dab8fcf8871cce7b92701d754a1a79fcde9fce6->leave($__internal_6001d0179575bf1d0689e02f5dab8fcf8871cce7b92701d754a1a79fcde9fce6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2913c08ad8ecf8a37c2c635bf2db9330ac5eb71050917539a666b9ab9c5557b0 = $this->env->getExtension("native_profiler");
        $__internal_2913c08ad8ecf8a37c2c635bf2db9330ac5eb71050917539a666b9ab9c5557b0->enter($__internal_2913c08ad8ecf8a37c2c635bf2db9330ac5eb71050917539a666b9ab9c5557b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2913c08ad8ecf8a37c2c635bf2db9330ac5eb71050917539a666b9ab9c5557b0->leave($__internal_2913c08ad8ecf8a37c2c635bf2db9330ac5eb71050917539a666b9ab9c5557b0_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
