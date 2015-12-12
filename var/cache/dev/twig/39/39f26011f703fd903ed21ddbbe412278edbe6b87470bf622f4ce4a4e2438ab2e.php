<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_9e05afe6fb3631dc00f005896e40e670c52e4a9ac093f0787f4a757f22cdd3cc extends Twig_Template
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
        $__internal_76445def34c7d195fd0574a3968a8f649ad73b4d83ac8964e027f06061519d49 = $this->env->getExtension("native_profiler");
        $__internal_76445def34c7d195fd0574a3968a8f649ad73b4d83ac8964e027f06061519d49->enter($__internal_76445def34c7d195fd0574a3968a8f649ad73b4d83ac8964e027f06061519d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76445def34c7d195fd0574a3968a8f649ad73b4d83ac8964e027f06061519d49->leave($__internal_76445def34c7d195fd0574a3968a8f649ad73b4d83ac8964e027f06061519d49_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e7b788e588c6c96918cf55b8db0341f5cafd34db2d5dfa732ed9642e317bc38 = $this->env->getExtension("native_profiler");
        $__internal_8e7b788e588c6c96918cf55b8db0341f5cafd34db2d5dfa732ed9642e317bc38->enter($__internal_8e7b788e588c6c96918cf55b8db0341f5cafd34db2d5dfa732ed9642e317bc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8e7b788e588c6c96918cf55b8db0341f5cafd34db2d5dfa732ed9642e317bc38->leave($__internal_8e7b788e588c6c96918cf55b8db0341f5cafd34db2d5dfa732ed9642e317bc38_prof);

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
