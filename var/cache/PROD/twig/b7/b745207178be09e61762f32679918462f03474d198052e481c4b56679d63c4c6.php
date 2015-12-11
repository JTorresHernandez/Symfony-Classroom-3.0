<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_313c32b428f8637fe445333c935597be3f02ad4bba16db06ab03e1751f3d6884 extends Twig_Template
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
        $__internal_bb48722fff72b784ce46fcbab8a3eb26458dd6cb1df0a69bee49ac351fb0be76 = $this->env->getExtension("native_profiler");
        $__internal_bb48722fff72b784ce46fcbab8a3eb26458dd6cb1df0a69bee49ac351fb0be76->enter($__internal_bb48722fff72b784ce46fcbab8a3eb26458dd6cb1df0a69bee49ac351fb0be76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb48722fff72b784ce46fcbab8a3eb26458dd6cb1df0a69bee49ac351fb0be76->leave($__internal_bb48722fff72b784ce46fcbab8a3eb26458dd6cb1df0a69bee49ac351fb0be76_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e58fc7fe03b444a7a0bb77ef16e4afc57712c387fa9f69245d427dbddd25f858 = $this->env->getExtension("native_profiler");
        $__internal_e58fc7fe03b444a7a0bb77ef16e4afc57712c387fa9f69245d427dbddd25f858->enter($__internal_e58fc7fe03b444a7a0bb77ef16e4afc57712c387fa9f69245d427dbddd25f858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e58fc7fe03b444a7a0bb77ef16e4afc57712c387fa9f69245d427dbddd25f858->leave($__internal_e58fc7fe03b444a7a0bb77ef16e4afc57712c387fa9f69245d427dbddd25f858_prof);

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
