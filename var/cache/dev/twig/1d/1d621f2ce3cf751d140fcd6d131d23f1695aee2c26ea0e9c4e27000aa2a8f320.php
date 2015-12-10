<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_55d0ceda7c887010f166f6101a58b66fad174b0e2a5b428f685566a5f4cd062c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8e2dcde546001099732134956ee8a03f56cc0500912d018ca1eb1f468dbdb4a2 = $this->env->getExtension("native_profiler");
        $__internal_8e2dcde546001099732134956ee8a03f56cc0500912d018ca1eb1f468dbdb4a2->enter($__internal_8e2dcde546001099732134956ee8a03f56cc0500912d018ca1eb1f468dbdb4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e2dcde546001099732134956ee8a03f56cc0500912d018ca1eb1f468dbdb4a2->leave($__internal_8e2dcde546001099732134956ee8a03f56cc0500912d018ca1eb1f468dbdb4a2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd9f056c54b21c2cca113d966aae0840cd27f4225d26a95239d5a2b3ae9a8b4e = $this->env->getExtension("native_profiler");
        $__internal_fd9f056c54b21c2cca113d966aae0840cd27f4225d26a95239d5a2b3ae9a8b4e->enter($__internal_fd9f056c54b21c2cca113d966aae0840cd27f4225d26a95239d5a2b3ae9a8b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fd9f056c54b21c2cca113d966aae0840cd27f4225d26a95239d5a2b3ae9a8b4e->leave($__internal_fd9f056c54b21c2cca113d966aae0840cd27f4225d26a95239d5a2b3ae9a8b4e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
