<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_aa9c29d8d03303c7410e32a1159ab3f1c6dcd0d979f0fd612a25521e1d282eb6 extends Twig_Template
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
        $__internal_303d37953c0a42bbc3d94eda82099cb451355ed1bf89227449a07c5f6b43cc8d = $this->env->getExtension("native_profiler");
        $__internal_303d37953c0a42bbc3d94eda82099cb451355ed1bf89227449a07c5f6b43cc8d->enter($__internal_303d37953c0a42bbc3d94eda82099cb451355ed1bf89227449a07c5f6b43cc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_303d37953c0a42bbc3d94eda82099cb451355ed1bf89227449a07c5f6b43cc8d->leave($__internal_303d37953c0a42bbc3d94eda82099cb451355ed1bf89227449a07c5f6b43cc8d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d2d52e78053396a03283b9b8619916c880223a3e78d11669857a8315dc59fe3 = $this->env->getExtension("native_profiler");
        $__internal_5d2d52e78053396a03283b9b8619916c880223a3e78d11669857a8315dc59fe3->enter($__internal_5d2d52e78053396a03283b9b8619916c880223a3e78d11669857a8315dc59fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5d2d52e78053396a03283b9b8619916c880223a3e78d11669857a8315dc59fe3->leave($__internal_5d2d52e78053396a03283b9b8619916c880223a3e78d11669857a8315dc59fe3_prof);

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
