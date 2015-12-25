<?php

/* :comment:show-form-edit-mode.html.twig */
class __TwigTemplate_d0c6985abaa72cf1c7bb401c22bfc43a093345086746e3078c4751175af7204a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":comment:show-form-edit-mode.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b50f958ea7dc1e51be3929a12e3dc7417961de01a51312223c42c3f902c3a320 = $this->env->getExtension("native_profiler");
        $__internal_b50f958ea7dc1e51be3929a12e3dc7417961de01a51312223c42c3f902c3a320->enter($__internal_b50f958ea7dc1e51be3929a12e3dc7417961de01a51312223c42c3f902c3a320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form-edit-mode.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b50f958ea7dc1e51be3929a12e3dc7417961de01a51312223c42c3f902c3a320->leave($__internal_b50f958ea7dc1e51be3929a12e3dc7417961de01a51312223c42c3f902c3a320_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_780e833e581bdb76f915d27ad4e2e3cfea16192935fd203f6101e296f7de60ba = $this->env->getExtension("native_profiler");
        $__internal_780e833e581bdb76f915d27ad4e2e3cfea16192935fd203f6101e296f7de60ba->enter($__internal_780e833e581bdb76f915d27ad4e2e3cfea16192935fd203f6101e296f7de60ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_780e833e581bdb76f915d27ad4e2e3cfea16192935fd203f6101e296f7de60ba->leave($__internal_780e833e581bdb76f915d27ad4e2e3cfea16192935fd203f6101e296f7de60ba_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f90ce9181a0795755c5a196c44ed6f6ff8c9b68d2a7ef976327cdcc2f18d3bc6 = $this->env->getExtension("native_profiler");
        $__internal_f90ce9181a0795755c5a196c44ed6f6ff8c9b68d2a7ef976327cdcc2f18d3bc6->enter($__internal_f90ce9181a0795755c5a196c44ed6f6ff8c9b68d2a7ef976327cdcc2f18d3bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_f90ce9181a0795755c5a196c44ed6f6ff8c9b68d2a7ef976327cdcc2f18d3bc6->leave($__internal_f90ce9181a0795755c5a196c44ed6f6ff8c9b68d2a7ef976327cdcc2f18d3bc6_prof);

    }

    public function getTemplateName()
    {
        return ":comment:show-form-edit-mode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
