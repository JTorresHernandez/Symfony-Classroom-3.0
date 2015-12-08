<?php

/* UserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_478b93bb98fa0ecfe3d4265b0222d83e963a158bf2e9f2ae3f6afc1b76a706ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_6ad84ba3ec2bd17b9ad287e8e15b472ac4dd22c678777ea68f4edde8af83bf73 = $this->env->getExtension("native_profiler");
        $__internal_6ad84ba3ec2bd17b9ad287e8e15b472ac4dd22c678777ea68f4edde8af83bf73->enter($__internal_6ad84ba3ec2bd17b9ad287e8e15b472ac4dd22c678777ea68f4edde8af83bf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad84ba3ec2bd17b9ad287e8e15b472ac4dd22c678777ea68f4edde8af83bf73->leave($__internal_6ad84ba3ec2bd17b9ad287e8e15b472ac4dd22c678777ea68f4edde8af83bf73_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9da2168e2c1392d7aff04497e749baa1d0fc8cf346b93d555e992033ade64e0d = $this->env->getExtension("native_profiler");
        $__internal_9da2168e2c1392d7aff04497e749baa1d0fc8cf346b93d555e992033ade64e0d->enter($__internal_9da2168e2c1392d7aff04497e749baa1d0fc8cf346b93d555e992033ade64e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9da2168e2c1392d7aff04497e749baa1d0fc8cf346b93d555e992033ade64e0d->leave($__internal_9da2168e2c1392d7aff04497e749baa1d0fc8cf346b93d555e992033ade64e0d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:checkEmail.html.twig";
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
