<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_be91cb43978f68c5ee85502454857112c35c4c3d56a8150dea7d1c4a830ba6de extends Twig_Template
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
        $__internal_405c573415b404f4c5818949d9af78258ae2fb51832f84d0df94a5bdd2ac3e2c = $this->env->getExtension("native_profiler");
        $__internal_405c573415b404f4c5818949d9af78258ae2fb51832f84d0df94a5bdd2ac3e2c->enter($__internal_405c573415b404f4c5818949d9af78258ae2fb51832f84d0df94a5bdd2ac3e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_405c573415b404f4c5818949d9af78258ae2fb51832f84d0df94a5bdd2ac3e2c->leave($__internal_405c573415b404f4c5818949d9af78258ae2fb51832f84d0df94a5bdd2ac3e2c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4019828d8247a0c088e8f56b396c4520c99501d741a5fecff7c89f1d9c410a0d = $this->env->getExtension("native_profiler");
        $__internal_4019828d8247a0c088e8f56b396c4520c99501d741a5fecff7c89f1d9c410a0d->enter($__internal_4019828d8247a0c088e8f56b396c4520c99501d741a5fecff7c89f1d9c410a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4019828d8247a0c088e8f56b396c4520c99501d741a5fecff7c89f1d9c410a0d->leave($__internal_4019828d8247a0c088e8f56b396c4520c99501d741a5fecff7c89f1d9c410a0d_prof);

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
