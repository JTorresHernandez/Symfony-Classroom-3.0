<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_02e836552a519dcf2581364cbdbd72c44b95b4b771927d881c60d81b95481839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ceab7c057cb586e6f64bf7e93ad234959c73685c3e91e12776b9f9811cfaf9a5 = $this->env->getExtension("native_profiler");
        $__internal_ceab7c057cb586e6f64bf7e93ad234959c73685c3e91e12776b9f9811cfaf9a5->enter($__internal_ceab7c057cb586e6f64bf7e93ad234959c73685c3e91e12776b9f9811cfaf9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ceab7c057cb586e6f64bf7e93ad234959c73685c3e91e12776b9f9811cfaf9a5->leave($__internal_ceab7c057cb586e6f64bf7e93ad234959c73685c3e91e12776b9f9811cfaf9a5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fe193a760f30bd85ce11d32a2186866adbb91ccd9315e7c322fdb0e111f65757 = $this->env->getExtension("native_profiler");
        $__internal_fe193a760f30bd85ce11d32a2186866adbb91ccd9315e7c322fdb0e111f65757->enter($__internal_fe193a760f30bd85ce11d32a2186866adbb91ccd9315e7c322fdb0e111f65757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_fe193a760f30bd85ce11d32a2186866adbb91ccd9315e7c322fdb0e111f65757->leave($__internal_fe193a760f30bd85ce11d32a2186866adbb91ccd9315e7c322fdb0e111f65757_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_40d203bdcb847e80eecaf1c7044080421e842e7aeba4a37eb4c68aaeab5b4333 = $this->env->getExtension("native_profiler");
        $__internal_40d203bdcb847e80eecaf1c7044080421e842e7aeba4a37eb4c68aaeab5b4333->enter($__internal_40d203bdcb847e80eecaf1c7044080421e842e7aeba4a37eb4c68aaeab5b4333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_40d203bdcb847e80eecaf1c7044080421e842e7aeba4a37eb4c68aaeab5b4333->leave($__internal_40d203bdcb847e80eecaf1c7044080421e842e7aeba4a37eb4c68aaeab5b4333_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_31623fbc37b86cf7b731d88555b889a7e35aab978bb0fd4472e2d0470b124fb4 = $this->env->getExtension("native_profiler");
        $__internal_31623fbc37b86cf7b731d88555b889a7e35aab978bb0fd4472e2d0470b124fb4->enter($__internal_31623fbc37b86cf7b731d88555b889a7e35aab978bb0fd4472e2d0470b124fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_31623fbc37b86cf7b731d88555b889a7e35aab978bb0fd4472e2d0470b124fb4->leave($__internal_31623fbc37b86cf7b731d88555b889a7e35aab978bb0fd4472e2d0470b124fb4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
