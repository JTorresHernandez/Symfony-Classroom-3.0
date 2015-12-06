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
        $__internal_c825bef8ba7d53af439b4ede5f751a1b076b11f9906dd20ecf082677f7ec882f = $this->env->getExtension("native_profiler");
        $__internal_c825bef8ba7d53af439b4ede5f751a1b076b11f9906dd20ecf082677f7ec882f->enter($__internal_c825bef8ba7d53af439b4ede5f751a1b076b11f9906dd20ecf082677f7ec882f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c825bef8ba7d53af439b4ede5f751a1b076b11f9906dd20ecf082677f7ec882f->leave($__internal_c825bef8ba7d53af439b4ede5f751a1b076b11f9906dd20ecf082677f7ec882f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac311d687e8a9849d2cc7938d29eb7121c3a43d3133597e9ccce1e7df9e087c5 = $this->env->getExtension("native_profiler");
        $__internal_ac311d687e8a9849d2cc7938d29eb7121c3a43d3133597e9ccce1e7df9e087c5->enter($__internal_ac311d687e8a9849d2cc7938d29eb7121c3a43d3133597e9ccce1e7df9e087c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_ac311d687e8a9849d2cc7938d29eb7121c3a43d3133597e9ccce1e7df9e087c5->leave($__internal_ac311d687e8a9849d2cc7938d29eb7121c3a43d3133597e9ccce1e7df9e087c5_prof);

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
