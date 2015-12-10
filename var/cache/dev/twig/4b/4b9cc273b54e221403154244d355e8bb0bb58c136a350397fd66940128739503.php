<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_e4c3e52fa87db7347ce62a25ce06b30cfa1b8deb2edd8f872a33dcdafbf8bc42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_befc5fb30220caddcb18baced914d3219d3a122b42f902650bdf409fe7921016 = $this->env->getExtension("native_profiler");
        $__internal_befc5fb30220caddcb18baced914d3219d3a122b42f902650bdf409fe7921016->enter($__internal_befc5fb30220caddcb18baced914d3219d3a122b42f902650bdf409fe7921016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_befc5fb30220caddcb18baced914d3219d3a122b42f902650bdf409fe7921016->leave($__internal_befc5fb30220caddcb18baced914d3219d3a122b42f902650bdf409fe7921016_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b66aaf15948b39bf9030e925d7f2c7d560b1207ae4570c8eb8cd45b316b7b5d3 = $this->env->getExtension("native_profiler");
        $__internal_b66aaf15948b39bf9030e925d7f2c7d560b1207ae4570c8eb8cd45b316b7b5d3->enter($__internal_b66aaf15948b39bf9030e925d7f2c7d560b1207ae4570c8eb8cd45b316b7b5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b66aaf15948b39bf9030e925d7f2c7d560b1207ae4570c8eb8cd45b316b7b5d3->leave($__internal_b66aaf15948b39bf9030e925d7f2c7d560b1207ae4570c8eb8cd45b316b7b5d3_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
