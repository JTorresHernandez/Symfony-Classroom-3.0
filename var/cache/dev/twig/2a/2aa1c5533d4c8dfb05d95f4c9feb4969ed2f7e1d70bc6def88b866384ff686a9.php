<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e653beadf82025b32f8556c30f65cf1e9322412423cdff2136cb621ee26052a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_da21fcc3ea3132f56f596562d111f63455bf27ae4ad467c70fc61ee17c03b5d2 = $this->env->getExtension("native_profiler");
        $__internal_da21fcc3ea3132f56f596562d111f63455bf27ae4ad467c70fc61ee17c03b5d2->enter($__internal_da21fcc3ea3132f56f596562d111f63455bf27ae4ad467c70fc61ee17c03b5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da21fcc3ea3132f56f596562d111f63455bf27ae4ad467c70fc61ee17c03b5d2->leave($__internal_da21fcc3ea3132f56f596562d111f63455bf27ae4ad467c70fc61ee17c03b5d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afa1c06a3ee29bc7b8aeacf7fe1e9819e4f7b17da92ec1d865e32b755ab856a4 = $this->env->getExtension("native_profiler");
        $__internal_afa1c06a3ee29bc7b8aeacf7fe1e9819e4f7b17da92ec1d865e32b755ab856a4->enter($__internal_afa1c06a3ee29bc7b8aeacf7fe1e9819e4f7b17da92ec1d865e32b755ab856a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_afa1c06a3ee29bc7b8aeacf7fe1e9819e4f7b17da92ec1d865e32b755ab856a4->leave($__internal_afa1c06a3ee29bc7b8aeacf7fe1e9819e4f7b17da92ec1d865e32b755ab856a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
