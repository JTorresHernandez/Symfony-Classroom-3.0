<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_be1aafc60b13d6a479813600509f58ea55b00cb63c7b4a435824ffceb3603a60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:show.html.twig", 1);
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
        $__internal_637818406213a7ef794226680c338cd3504b85dd762152ac19fa5eb19d1679b2 = $this->env->getExtension("native_profiler");
        $__internal_637818406213a7ef794226680c338cd3504b85dd762152ac19fa5eb19d1679b2->enter($__internal_637818406213a7ef794226680c338cd3504b85dd762152ac19fa5eb19d1679b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_637818406213a7ef794226680c338cd3504b85dd762152ac19fa5eb19d1679b2->leave($__internal_637818406213a7ef794226680c338cd3504b85dd762152ac19fa5eb19d1679b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d63e145f14c0722e2742d27ffed21a6a0fefba0866d766d58d27e1da273871f = $this->env->getExtension("native_profiler");
        $__internal_3d63e145f14c0722e2742d27ffed21a6a0fefba0866d766d58d27e1da273871f->enter($__internal_3d63e145f14c0722e2742d27ffed21a6a0fefba0866d766d58d27e1da273871f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3d63e145f14c0722e2742d27ffed21a6a0fefba0866d766d58d27e1da273871f->leave($__internal_3d63e145f14c0722e2742d27ffed21a6a0fefba0866d766d58d27e1da273871f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
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
