<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2b747d0c4c2bd2b6932d30bdfeab395222839fdc2c50733fa78fdb61ad8bd723 extends Twig_Template
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
        $__internal_cfa6911cc07b287fe7314edb6050eff1922d32623887adbe4feff4b1048857ee = $this->env->getExtension("native_profiler");
        $__internal_cfa6911cc07b287fe7314edb6050eff1922d32623887adbe4feff4b1048857ee->enter($__internal_cfa6911cc07b287fe7314edb6050eff1922d32623887adbe4feff4b1048857ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfa6911cc07b287fe7314edb6050eff1922d32623887adbe4feff4b1048857ee->leave($__internal_cfa6911cc07b287fe7314edb6050eff1922d32623887adbe4feff4b1048857ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64fc2e2780be81d8e30c57c7f6e47c92280e164389f61a09e508b41fa98c4e80 = $this->env->getExtension("native_profiler");
        $__internal_64fc2e2780be81d8e30c57c7f6e47c92280e164389f61a09e508b41fa98c4e80->enter($__internal_64fc2e2780be81d8e30c57c7f6e47c92280e164389f61a09e508b41fa98c4e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_64fc2e2780be81d8e30c57c7f6e47c92280e164389f61a09e508b41fa98c4e80->leave($__internal_64fc2e2780be81d8e30c57c7f6e47c92280e164389f61a09e508b41fa98c4e80_prof);

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
