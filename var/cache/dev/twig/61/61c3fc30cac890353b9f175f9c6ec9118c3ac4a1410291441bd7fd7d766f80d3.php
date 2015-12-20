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
        $__internal_b749d48388aea83f35af5af06ea2fcbc54021392fb99c10d138c2785fbfe2568 = $this->env->getExtension("native_profiler");
        $__internal_b749d48388aea83f35af5af06ea2fcbc54021392fb99c10d138c2785fbfe2568->enter($__internal_b749d48388aea83f35af5af06ea2fcbc54021392fb99c10d138c2785fbfe2568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b749d48388aea83f35af5af06ea2fcbc54021392fb99c10d138c2785fbfe2568->leave($__internal_b749d48388aea83f35af5af06ea2fcbc54021392fb99c10d138c2785fbfe2568_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aca79ababa86ce158591658e70163773362aaa0b62ffa644d3d0327728f9b768 = $this->env->getExtension("native_profiler");
        $__internal_aca79ababa86ce158591658e70163773362aaa0b62ffa644d3d0327728f9b768->enter($__internal_aca79ababa86ce158591658e70163773362aaa0b62ffa644d3d0327728f9b768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_aca79ababa86ce158591658e70163773362aaa0b62ffa644d3d0327728f9b768->leave($__internal_aca79ababa86ce158591658e70163773362aaa0b62ffa644d3d0327728f9b768_prof);

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
