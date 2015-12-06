<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_fd5ec6d27d1066beef227dbda9afa7902de45ee5991ece7ec3a03ddcbc97de61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e07cc30bf6ac7aef6d0dbd7a7730cdb093289b3d80027e854fb1ea9af8f77016 = $this->env->getExtension("native_profiler");
        $__internal_e07cc30bf6ac7aef6d0dbd7a7730cdb093289b3d80027e854fb1ea9af8f77016->enter($__internal_e07cc30bf6ac7aef6d0dbd7a7730cdb093289b3d80027e854fb1ea9af8f77016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e07cc30bf6ac7aef6d0dbd7a7730cdb093289b3d80027e854fb1ea9af8f77016->leave($__internal_e07cc30bf6ac7aef6d0dbd7a7730cdb093289b3d80027e854fb1ea9af8f77016_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d7093bf744f9c147f767fe122edf34af4ae7fd4ecafd2c9672c386e60e6d6a6 = $this->env->getExtension("native_profiler");
        $__internal_2d7093bf744f9c147f767fe122edf34af4ae7fd4ecafd2c9672c386e60e6d6a6->enter($__internal_2d7093bf744f9c147f767fe122edf34af4ae7fd4ecafd2c9672c386e60e6d6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2d7093bf744f9c147f767fe122edf34af4ae7fd4ecafd2c9672c386e60e6d6a6->leave($__internal_2d7093bf744f9c147f767fe122edf34af4ae7fd4ecafd2c9672c386e60e6d6a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
