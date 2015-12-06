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
        $__internal_067ae44c3bdb95a07ca96c1efc02f7a5f2fe18af4cf05f07c54f99a5423b983a = $this->env->getExtension("native_profiler");
        $__internal_067ae44c3bdb95a07ca96c1efc02f7a5f2fe18af4cf05f07c54f99a5423b983a->enter($__internal_067ae44c3bdb95a07ca96c1efc02f7a5f2fe18af4cf05f07c54f99a5423b983a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_067ae44c3bdb95a07ca96c1efc02f7a5f2fe18af4cf05f07c54f99a5423b983a->leave($__internal_067ae44c3bdb95a07ca96c1efc02f7a5f2fe18af4cf05f07c54f99a5423b983a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c29f18cf5452e2d4625435af8adc526ec05c288757ef3061c518de0755d85fb = $this->env->getExtension("native_profiler");
        $__internal_2c29f18cf5452e2d4625435af8adc526ec05c288757ef3061c518de0755d85fb->enter($__internal_2c29f18cf5452e2d4625435af8adc526ec05c288757ef3061c518de0755d85fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2c29f18cf5452e2d4625435af8adc526ec05c288757ef3061c518de0755d85fb->leave($__internal_2c29f18cf5452e2d4625435af8adc526ec05c288757ef3061c518de0755d85fb_prof);

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
