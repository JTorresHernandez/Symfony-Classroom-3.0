<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_d79c253f3c23f3719d363df481de735049819d769676ff09f7b650ccfdb6c857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_5425cd163bcb321059166dfa5753b92b893d2f3d97d9eaa8b2cb38612f556baf = $this->env->getExtension("native_profiler");
        $__internal_5425cd163bcb321059166dfa5753b92b893d2f3d97d9eaa8b2cb38612f556baf->enter($__internal_5425cd163bcb321059166dfa5753b92b893d2f3d97d9eaa8b2cb38612f556baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5425cd163bcb321059166dfa5753b92b893d2f3d97d9eaa8b2cb38612f556baf->leave($__internal_5425cd163bcb321059166dfa5753b92b893d2f3d97d9eaa8b2cb38612f556baf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b156df5bb3507f5a1ec54e6bb4bbf9abeb4ec86d43953a2ec777b67cd33921d0 = $this->env->getExtension("native_profiler");
        $__internal_b156df5bb3507f5a1ec54e6bb4bbf9abeb4ec86d43953a2ec777b67cd33921d0->enter($__internal_b156df5bb3507f5a1ec54e6bb4bbf9abeb4ec86d43953a2ec777b67cd33921d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_b156df5bb3507f5a1ec54e6bb4bbf9abeb4ec86d43953a2ec777b67cd33921d0->leave($__internal_b156df5bb3507f5a1ec54e6bb4bbf9abeb4ec86d43953a2ec777b67cd33921d0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
