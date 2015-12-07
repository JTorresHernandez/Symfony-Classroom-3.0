<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_e2460532937fb8355e5d4fc5dd3ba4f892d8625648956741b8a89813e4f8ce98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6d30ac693aa717782c2f8f3e10122b3709cb1da2105c1af316016fec82590730 = $this->env->getExtension("native_profiler");
        $__internal_6d30ac693aa717782c2f8f3e10122b3709cb1da2105c1af316016fec82590730->enter($__internal_6d30ac693aa717782c2f8f3e10122b3709cb1da2105c1af316016fec82590730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d30ac693aa717782c2f8f3e10122b3709cb1da2105c1af316016fec82590730->leave($__internal_6d30ac693aa717782c2f8f3e10122b3709cb1da2105c1af316016fec82590730_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7f565c576ddb67562fe9f14d15cb72f2d5df42b2c8c305ee063a884d61d46da = $this->env->getExtension("native_profiler");
        $__internal_d7f565c576ddb67562fe9f14d15cb72f2d5df42b2c8c305ee063a884d61d46da->enter($__internal_d7f565c576ddb67562fe9f14d15cb72f2d5df42b2c8c305ee063a884d61d46da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d7f565c576ddb67562fe9f14d15cb72f2d5df42b2c8c305ee063a884d61d46da->leave($__internal_d7f565c576ddb67562fe9f14d15cb72f2d5df42b2c8c305ee063a884d61d46da_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
