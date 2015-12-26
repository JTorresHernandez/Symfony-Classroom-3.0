<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_e39169b4658129d827956cb867102b79c0eba9ffc1a3d93493ad682a84aec49e extends Twig_Template
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
        $__internal_3784c8d036ebfc4f59d0fc94e2f93e6e6f18fc2dd7c06d6c2dcbc5a7133b0d3c = $this->env->getExtension("native_profiler");
        $__internal_3784c8d036ebfc4f59d0fc94e2f93e6e6f18fc2dd7c06d6c2dcbc5a7133b0d3c->enter($__internal_3784c8d036ebfc4f59d0fc94e2f93e6e6f18fc2dd7c06d6c2dcbc5a7133b0d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3784c8d036ebfc4f59d0fc94e2f93e6e6f18fc2dd7c06d6c2dcbc5a7133b0d3c->leave($__internal_3784c8d036ebfc4f59d0fc94e2f93e6e6f18fc2dd7c06d6c2dcbc5a7133b0d3c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2ef0f7212ed66c5c6b39909e664abd577f0e566bd5781d7216861993155f69d = $this->env->getExtension("native_profiler");
        $__internal_f2ef0f7212ed66c5c6b39909e664abd577f0e566bd5781d7216861993155f69d->enter($__internal_f2ef0f7212ed66c5c6b39909e664abd577f0e566bd5781d7216861993155f69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f2ef0f7212ed66c5c6b39909e664abd577f0e566bd5781d7216861993155f69d->leave($__internal_f2ef0f7212ed66c5c6b39909e664abd577f0e566bd5781d7216861993155f69d_prof);

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
