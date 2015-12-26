<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_41feeb4c24185a80bfef3f42d827cbabac181231e00e5da13ec3412af573d245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_f721e914914a2a6888e340e538cc30d843551cc4e8065b79536179eff7fa2aa7 = $this->env->getExtension("native_profiler");
        $__internal_f721e914914a2a6888e340e538cc30d843551cc4e8065b79536179eff7fa2aa7->enter($__internal_f721e914914a2a6888e340e538cc30d843551cc4e8065b79536179eff7fa2aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f721e914914a2a6888e340e538cc30d843551cc4e8065b79536179eff7fa2aa7->leave($__internal_f721e914914a2a6888e340e538cc30d843551cc4e8065b79536179eff7fa2aa7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9503c6225d9fdef033b9ea45cd9bf4f845af906e3fb56a764563c616e99faf25 = $this->env->getExtension("native_profiler");
        $__internal_9503c6225d9fdef033b9ea45cd9bf4f845af906e3fb56a764563c616e99faf25->enter($__internal_9503c6225d9fdef033b9ea45cd9bf4f845af906e3fb56a764563c616e99faf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_9503c6225d9fdef033b9ea45cd9bf4f845af906e3fb56a764563c616e99faf25->leave($__internal_9503c6225d9fdef033b9ea45cd9bf4f845af906e3fb56a764563c616e99faf25_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
