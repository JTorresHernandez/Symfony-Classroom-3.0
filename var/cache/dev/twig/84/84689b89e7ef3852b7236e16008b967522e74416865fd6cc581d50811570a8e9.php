<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_fc2e4357f2da33b690c0c3a6a74a2bce4d156c5b36891f3930b6d7dfadce11e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_953986a986c4554084016cd329a011fcd8e36a3dd3ae79802bff0d69df76763f = $this->env->getExtension("native_profiler");
        $__internal_953986a986c4554084016cd329a011fcd8e36a3dd3ae79802bff0d69df76763f->enter($__internal_953986a986c4554084016cd329a011fcd8e36a3dd3ae79802bff0d69df76763f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_953986a986c4554084016cd329a011fcd8e36a3dd3ae79802bff0d69df76763f->leave($__internal_953986a986c4554084016cd329a011fcd8e36a3dd3ae79802bff0d69df76763f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0164786e96a60b5fcfb1c43cb3c69d501a2cd9ac8a8ed4ce89d7d6507070fbb7 = $this->env->getExtension("native_profiler");
        $__internal_0164786e96a60b5fcfb1c43cb3c69d501a2cd9ac8a8ed4ce89d7d6507070fbb7->enter($__internal_0164786e96a60b5fcfb1c43cb3c69d501a2cd9ac8a8ed4ce89d7d6507070fbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0164786e96a60b5fcfb1c43cb3c69d501a2cd9ac8a8ed4ce89d7d6507070fbb7->leave($__internal_0164786e96a60b5fcfb1c43cb3c69d501a2cd9ac8a8ed4ce89d7d6507070fbb7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
