<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_a50f8de56e02850bdade0887abb5b10ad276cdd88336b30b7a55e616394ed242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_a85325e758538d5bd4d36d82107797f2476b901f52be5077b2f17eba9d2e4399 = $this->env->getExtension("native_profiler");
        $__internal_a85325e758538d5bd4d36d82107797f2476b901f52be5077b2f17eba9d2e4399->enter($__internal_a85325e758538d5bd4d36d82107797f2476b901f52be5077b2f17eba9d2e4399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a85325e758538d5bd4d36d82107797f2476b901f52be5077b2f17eba9d2e4399->leave($__internal_a85325e758538d5bd4d36d82107797f2476b901f52be5077b2f17eba9d2e4399_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce9895866ccf7b1ec9d4982095e1a89aeee0d18ce3a4ddcd0703a151792c6234 = $this->env->getExtension("native_profiler");
        $__internal_ce9895866ccf7b1ec9d4982095e1a89aeee0d18ce3a4ddcd0703a151792c6234->enter($__internal_ce9895866ccf7b1ec9d4982095e1a89aeee0d18ce3a4ddcd0703a151792c6234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ce9895866ccf7b1ec9d4982095e1a89aeee0d18ce3a4ddcd0703a151792c6234->leave($__internal_ce9895866ccf7b1ec9d4982095e1a89aeee0d18ce3a4ddcd0703a151792c6234_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
