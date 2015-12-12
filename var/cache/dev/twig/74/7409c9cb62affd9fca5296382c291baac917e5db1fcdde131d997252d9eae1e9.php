<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_17122bd7a774e255162b2bdfbba1b0bb623cde8570346bd5bcb8e166816abd65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_adbbaf374707ac68df06f640cdb1a02e4cf7de44740cf9affdb753038e0bd66c = $this->env->getExtension("native_profiler");
        $__internal_adbbaf374707ac68df06f640cdb1a02e4cf7de44740cf9affdb753038e0bd66c->enter($__internal_adbbaf374707ac68df06f640cdb1a02e4cf7de44740cf9affdb753038e0bd66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adbbaf374707ac68df06f640cdb1a02e4cf7de44740cf9affdb753038e0bd66c->leave($__internal_adbbaf374707ac68df06f640cdb1a02e4cf7de44740cf9affdb753038e0bd66c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41e44904cfee08566d9896159a6cc883ecb5de68342f55735553e8f9902cf458 = $this->env->getExtension("native_profiler");
        $__internal_41e44904cfee08566d9896159a6cc883ecb5de68342f55735553e8f9902cf458->enter($__internal_41e44904cfee08566d9896159a6cc883ecb5de68342f55735553e8f9902cf458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_41e44904cfee08566d9896159a6cc883ecb5de68342f55735553e8f9902cf458->leave($__internal_41e44904cfee08566d9896159a6cc883ecb5de68342f55735553e8f9902cf458_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
