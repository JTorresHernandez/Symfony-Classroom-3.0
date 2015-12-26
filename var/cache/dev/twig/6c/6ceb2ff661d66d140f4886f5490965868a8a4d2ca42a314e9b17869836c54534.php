<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_afc853581dfcd9fb58079b059f560bc0f6b92b2b7d3eed2154d5d9fb27573961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:register.html.twig", 1);
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
        $__internal_33ba7f08fa7b701d4e0cf9ee2806a233cf15b2e0ee0a3d1b17a8eab84fb65c3a = $this->env->getExtension("native_profiler");
        $__internal_33ba7f08fa7b701d4e0cf9ee2806a233cf15b2e0ee0a3d1b17a8eab84fb65c3a->enter($__internal_33ba7f08fa7b701d4e0cf9ee2806a233cf15b2e0ee0a3d1b17a8eab84fb65c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33ba7f08fa7b701d4e0cf9ee2806a233cf15b2e0ee0a3d1b17a8eab84fb65c3a->leave($__internal_33ba7f08fa7b701d4e0cf9ee2806a233cf15b2e0ee0a3d1b17a8eab84fb65c3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3476f51a300be0c9e65fb2a6aef85b6279f27906741a4e9f3720e0fed9cb2fe1 = $this->env->getExtension("native_profiler");
        $__internal_3476f51a300be0c9e65fb2a6aef85b6279f27906741a4e9f3720e0fed9cb2fe1->enter($__internal_3476f51a300be0c9e65fb2a6aef85b6279f27906741a4e9f3720e0fed9cb2fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3476f51a300be0c9e65fb2a6aef85b6279f27906741a4e9f3720e0fed9cb2fe1->leave($__internal_3476f51a300be0c9e65fb2a6aef85b6279f27906741a4e9f3720e0fed9cb2fe1_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
