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
        $__internal_b629b1ee5491b421a3790ac3885f27f815d2ba6b78f2e1982f119e4a422b87f3 = $this->env->getExtension("native_profiler");
        $__internal_b629b1ee5491b421a3790ac3885f27f815d2ba6b78f2e1982f119e4a422b87f3->enter($__internal_b629b1ee5491b421a3790ac3885f27f815d2ba6b78f2e1982f119e4a422b87f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b629b1ee5491b421a3790ac3885f27f815d2ba6b78f2e1982f119e4a422b87f3->leave($__internal_b629b1ee5491b421a3790ac3885f27f815d2ba6b78f2e1982f119e4a422b87f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_daf38d8f6b6103c7522e3de0b0517150e1262fa1aec77aabf5a595092583e8e5 = $this->env->getExtension("native_profiler");
        $__internal_daf38d8f6b6103c7522e3de0b0517150e1262fa1aec77aabf5a595092583e8e5->enter($__internal_daf38d8f6b6103c7522e3de0b0517150e1262fa1aec77aabf5a595092583e8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_daf38d8f6b6103c7522e3de0b0517150e1262fa1aec77aabf5a595092583e8e5->leave($__internal_daf38d8f6b6103c7522e3de0b0517150e1262fa1aec77aabf5a595092583e8e5_prof);

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
