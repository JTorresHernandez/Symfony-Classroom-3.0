<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_47bfccb15b624bd56960102802e6544b55a61ffc6baf5a54407ac4357a1e9028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_89b82419db699f8e896349f881c4bdecc577b6447587df3f2336d43b21e4ecd2 = $this->env->getExtension("native_profiler");
        $__internal_89b82419db699f8e896349f881c4bdecc577b6447587df3f2336d43b21e4ecd2->enter($__internal_89b82419db699f8e896349f881c4bdecc577b6447587df3f2336d43b21e4ecd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89b82419db699f8e896349f881c4bdecc577b6447587df3f2336d43b21e4ecd2->leave($__internal_89b82419db699f8e896349f881c4bdecc577b6447587df3f2336d43b21e4ecd2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30a3b1900177fffb90deeae0c7d3ff84a32cbf3e7d783f0bcde7c1cf67ba55e2 = $this->env->getExtension("native_profiler");
        $__internal_30a3b1900177fffb90deeae0c7d3ff84a32cbf3e7d783f0bcde7c1cf67ba55e2->enter($__internal_30a3b1900177fffb90deeae0c7d3ff84a32cbf3e7d783f0bcde7c1cf67ba55e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_30a3b1900177fffb90deeae0c7d3ff84a32cbf3e7d783f0bcde7c1cf67ba55e2->leave($__internal_30a3b1900177fffb90deeae0c7d3ff84a32cbf3e7d783f0bcde7c1cf67ba55e2_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
