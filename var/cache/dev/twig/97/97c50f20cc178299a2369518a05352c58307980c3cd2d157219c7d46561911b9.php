<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8e33d0c40dba539088b826860f22f199081fe4b57736421784ab30019e18bb01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_5d44900299b316f0a2ee266835696f172190cfdc1e9a4d40666cc1c062f8841f = $this->env->getExtension("native_profiler");
        $__internal_5d44900299b316f0a2ee266835696f172190cfdc1e9a4d40666cc1c062f8841f->enter($__internal_5d44900299b316f0a2ee266835696f172190cfdc1e9a4d40666cc1c062f8841f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d44900299b316f0a2ee266835696f172190cfdc1e9a4d40666cc1c062f8841f->leave($__internal_5d44900299b316f0a2ee266835696f172190cfdc1e9a4d40666cc1c062f8841f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d900332bd02b0c7c47ec0b9bd5d412addbd47b584345f801f43a98c0f1d3ce55 = $this->env->getExtension("native_profiler");
        $__internal_d900332bd02b0c7c47ec0b9bd5d412addbd47b584345f801f43a98c0f1d3ce55->enter($__internal_d900332bd02b0c7c47ec0b9bd5d412addbd47b584345f801f43a98c0f1d3ce55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d900332bd02b0c7c47ec0b9bd5d412addbd47b584345f801f43a98c0f1d3ce55->leave($__internal_d900332bd02b0c7c47ec0b9bd5d412addbd47b584345f801f43a98c0f1d3ce55_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
