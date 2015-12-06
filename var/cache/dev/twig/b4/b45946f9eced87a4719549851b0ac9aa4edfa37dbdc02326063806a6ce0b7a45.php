<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_4367bd90c20cd38c311d390deccb55664f5dbe25e5ef5cc9888cdb940f9dcc97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_dca944eb7343ede433e1111aaf3ccb70e8e8b87a692d5723cfb3a4872fa7007a = $this->env->getExtension("native_profiler");
        $__internal_dca944eb7343ede433e1111aaf3ccb70e8e8b87a692d5723cfb3a4872fa7007a->enter($__internal_dca944eb7343ede433e1111aaf3ccb70e8e8b87a692d5723cfb3a4872fa7007a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dca944eb7343ede433e1111aaf3ccb70e8e8b87a692d5723cfb3a4872fa7007a->leave($__internal_dca944eb7343ede433e1111aaf3ccb70e8e8b87a692d5723cfb3a4872fa7007a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e090862e7a05f50149d67ef7a62fb66f59c699f157988b481f0cdcabcd3944a8 = $this->env->getExtension("native_profiler");
        $__internal_e090862e7a05f50149d67ef7a62fb66f59c699f157988b481f0cdcabcd3944a8->enter($__internal_e090862e7a05f50149d67ef7a62fb66f59c699f157988b481f0cdcabcd3944a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e090862e7a05f50149d67ef7a62fb66f59c699f157988b481f0cdcabcd3944a8->leave($__internal_e090862e7a05f50149d67ef7a62fb66f59c699f157988b481f0cdcabcd3944a8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
