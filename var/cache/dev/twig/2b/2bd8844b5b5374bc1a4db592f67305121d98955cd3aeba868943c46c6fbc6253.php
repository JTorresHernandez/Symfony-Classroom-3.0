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
        $__internal_6f845b6e84202fbe7fe0401913ee3dacbe3354a6acbd3a904ecd9349e5f6e79e = $this->env->getExtension("native_profiler");
        $__internal_6f845b6e84202fbe7fe0401913ee3dacbe3354a6acbd3a904ecd9349e5f6e79e->enter($__internal_6f845b6e84202fbe7fe0401913ee3dacbe3354a6acbd3a904ecd9349e5f6e79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f845b6e84202fbe7fe0401913ee3dacbe3354a6acbd3a904ecd9349e5f6e79e->leave($__internal_6f845b6e84202fbe7fe0401913ee3dacbe3354a6acbd3a904ecd9349e5f6e79e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a99929e9de89cae3bd1e04b6d507d160f7b75597f116fad07c50fe81792f32c5 = $this->env->getExtension("native_profiler");
        $__internal_a99929e9de89cae3bd1e04b6d507d160f7b75597f116fad07c50fe81792f32c5->enter($__internal_a99929e9de89cae3bd1e04b6d507d160f7b75597f116fad07c50fe81792f32c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a99929e9de89cae3bd1e04b6d507d160f7b75597f116fad07c50fe81792f32c5->leave($__internal_a99929e9de89cae3bd1e04b6d507d160f7b75597f116fad07c50fe81792f32c5_prof);

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
