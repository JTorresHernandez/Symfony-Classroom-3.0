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
        $__internal_14eeec346678e07a6bd2419121eac80fed5f038639615a6957a1d66052238f0b = $this->env->getExtension("native_profiler");
        $__internal_14eeec346678e07a6bd2419121eac80fed5f038639615a6957a1d66052238f0b->enter($__internal_14eeec346678e07a6bd2419121eac80fed5f038639615a6957a1d66052238f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14eeec346678e07a6bd2419121eac80fed5f038639615a6957a1d66052238f0b->leave($__internal_14eeec346678e07a6bd2419121eac80fed5f038639615a6957a1d66052238f0b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_666d64758a9ace17e05b4d1515047d7418d320f247845402c75802f84d47635f = $this->env->getExtension("native_profiler");
        $__internal_666d64758a9ace17e05b4d1515047d7418d320f247845402c75802f84d47635f->enter($__internal_666d64758a9ace17e05b4d1515047d7418d320f247845402c75802f84d47635f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_666d64758a9ace17e05b4d1515047d7418d320f247845402c75802f84d47635f->leave($__internal_666d64758a9ace17e05b4d1515047d7418d320f247845402c75802f84d47635f_prof);

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
