<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_08ea6270cf702ea15196eba3b6d1d939a5db3f70d667ee4d6b25f426d3c02141 extends Twig_Template
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
        $__internal_4fb66fbf9db71bffcd0897f03a206284825cd9f0954a5396f6a3edb044b8a08a = $this->env->getExtension("native_profiler");
        $__internal_4fb66fbf9db71bffcd0897f03a206284825cd9f0954a5396f6a3edb044b8a08a->enter($__internal_4fb66fbf9db71bffcd0897f03a206284825cd9f0954a5396f6a3edb044b8a08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fb66fbf9db71bffcd0897f03a206284825cd9f0954a5396f6a3edb044b8a08a->leave($__internal_4fb66fbf9db71bffcd0897f03a206284825cd9f0954a5396f6a3edb044b8a08a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76c3c4b893f511ff1a4c70efa95ef84ccaa0801b8ac71566b090dfc561d74bf8 = $this->env->getExtension("native_profiler");
        $__internal_76c3c4b893f511ff1a4c70efa95ef84ccaa0801b8ac71566b090dfc561d74bf8->enter($__internal_76c3c4b893f511ff1a4c70efa95ef84ccaa0801b8ac71566b090dfc561d74bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_76c3c4b893f511ff1a4c70efa95ef84ccaa0801b8ac71566b090dfc561d74bf8->leave($__internal_76c3c4b893f511ff1a4c70efa95ef84ccaa0801b8ac71566b090dfc561d74bf8_prof);

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
