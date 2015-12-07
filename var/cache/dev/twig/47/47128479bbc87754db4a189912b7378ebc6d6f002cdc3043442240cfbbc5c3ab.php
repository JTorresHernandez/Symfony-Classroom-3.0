<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_54fc352fe3812ceddb43bfa35cc2740d696b61638179b51f1f930565c2ca9deb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:new.html.twig", 1);
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
        $__internal_c7a4d20e004a60ae8f109142c08f344197d2a6002ad6445d84d6502bdd1a9499 = $this->env->getExtension("native_profiler");
        $__internal_c7a4d20e004a60ae8f109142c08f344197d2a6002ad6445d84d6502bdd1a9499->enter($__internal_c7a4d20e004a60ae8f109142c08f344197d2a6002ad6445d84d6502bdd1a9499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7a4d20e004a60ae8f109142c08f344197d2a6002ad6445d84d6502bdd1a9499->leave($__internal_c7a4d20e004a60ae8f109142c08f344197d2a6002ad6445d84d6502bdd1a9499_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1da5ce51c27df9b9105623c9b5d8f6b4f8c313cfebde66fc73876322ace16e3 = $this->env->getExtension("native_profiler");
        $__internal_c1da5ce51c27df9b9105623c9b5d8f6b4f8c313cfebde66fc73876322ace16e3->enter($__internal_c1da5ce51c27df9b9105623c9b5d8f6b4f8c313cfebde66fc73876322ace16e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c1da5ce51c27df9b9105623c9b5d8f6b4f8c313cfebde66fc73876322ace16e3->leave($__internal_c1da5ce51c27df9b9105623c9b5d8f6b4f8c313cfebde66fc73876322ace16e3_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
