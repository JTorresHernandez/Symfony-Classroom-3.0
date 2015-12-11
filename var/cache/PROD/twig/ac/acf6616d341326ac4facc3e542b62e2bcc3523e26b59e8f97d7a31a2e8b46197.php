<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_e47e7ef08f31920b888077ecb930a9ad0b3158394a1fa4cf4b18bacfaa887520 extends Twig_Template
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
        $__internal_1558e34943f6ad90e275eba8595b505a6005dabe9e82a11c46b3e1ddc0501f02 = $this->env->getExtension("native_profiler");
        $__internal_1558e34943f6ad90e275eba8595b505a6005dabe9e82a11c46b3e1ddc0501f02->enter($__internal_1558e34943f6ad90e275eba8595b505a6005dabe9e82a11c46b3e1ddc0501f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1558e34943f6ad90e275eba8595b505a6005dabe9e82a11c46b3e1ddc0501f02->leave($__internal_1558e34943f6ad90e275eba8595b505a6005dabe9e82a11c46b3e1ddc0501f02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3100b2665c7247d106c4b9438499694bff1286d7d8e028b7fadb3a9b89035ca1 = $this->env->getExtension("native_profiler");
        $__internal_3100b2665c7247d106c4b9438499694bff1286d7d8e028b7fadb3a9b89035ca1->enter($__internal_3100b2665c7247d106c4b9438499694bff1286d7d8e028b7fadb3a9b89035ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3100b2665c7247d106c4b9438499694bff1286d7d8e028b7fadb3a9b89035ca1->leave($__internal_3100b2665c7247d106c4b9438499694bff1286d7d8e028b7fadb3a9b89035ca1_prof);

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
