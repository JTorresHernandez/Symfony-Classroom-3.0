<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_1d09dd0b8027a4c4a29e868d21819dbf6bcfad69cd88b576c2ed0c5771405f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_de8ae2a7f556ae1f8dea6d5059ceab6a51a2b4ed925a0bdb572b4a310ba22c9b = $this->env->getExtension("native_profiler");
        $__internal_de8ae2a7f556ae1f8dea6d5059ceab6a51a2b4ed925a0bdb572b4a310ba22c9b->enter($__internal_de8ae2a7f556ae1f8dea6d5059ceab6a51a2b4ed925a0bdb572b4a310ba22c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8ae2a7f556ae1f8dea6d5059ceab6a51a2b4ed925a0bdb572b4a310ba22c9b->leave($__internal_de8ae2a7f556ae1f8dea6d5059ceab6a51a2b4ed925a0bdb572b4a310ba22c9b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_685e0ce4f295476be7b6e33fd2ebe7fdf349434db76a31b4332978ab2ce90706 = $this->env->getExtension("native_profiler");
        $__internal_685e0ce4f295476be7b6e33fd2ebe7fdf349434db76a31b4332978ab2ce90706->enter($__internal_685e0ce4f295476be7b6e33fd2ebe7fdf349434db76a31b4332978ab2ce90706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_685e0ce4f295476be7b6e33fd2ebe7fdf349434db76a31b4332978ab2ce90706->leave($__internal_685e0ce4f295476be7b6e33fd2ebe7fdf349434db76a31b4332978ab2ce90706_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
