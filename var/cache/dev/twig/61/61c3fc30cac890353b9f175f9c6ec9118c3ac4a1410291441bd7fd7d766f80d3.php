<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_44edd0093cd159b9a194d13f2d70a6267e91b513af71b5d92d1755526473188b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_ec782a01a7c21df63e17c5cc4d8ff80540ffa05fa6c9e777dbecfef5857ea7f3 = $this->env->getExtension("native_profiler");
        $__internal_ec782a01a7c21df63e17c5cc4d8ff80540ffa05fa6c9e777dbecfef5857ea7f3->enter($__internal_ec782a01a7c21df63e17c5cc4d8ff80540ffa05fa6c9e777dbecfef5857ea7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec782a01a7c21df63e17c5cc4d8ff80540ffa05fa6c9e777dbecfef5857ea7f3->leave($__internal_ec782a01a7c21df63e17c5cc4d8ff80540ffa05fa6c9e777dbecfef5857ea7f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e91a9a03e592971c8800f2265436a61eb5b2beb9a5f42a4fe74d1baa3994aa6c = $this->env->getExtension("native_profiler");
        $__internal_e91a9a03e592971c8800f2265436a61eb5b2beb9a5f42a4fe74d1baa3994aa6c->enter($__internal_e91a9a03e592971c8800f2265436a61eb5b2beb9a5f42a4fe74d1baa3994aa6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e91a9a03e592971c8800f2265436a61eb5b2beb9a5f42a4fe74d1baa3994aa6c->leave($__internal_e91a9a03e592971c8800f2265436a61eb5b2beb9a5f42a4fe74d1baa3994aa6c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
