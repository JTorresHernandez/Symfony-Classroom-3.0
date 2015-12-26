<?php

/* :article:form.html.twig */
class __TwigTemplate_1aa97c11ab040de099b915c8a60d8bd6c16fac4ecf3a86ce7c452324cc514758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:form.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
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
        $__internal_581b8cc7d0b421bff50ea5ec90922565fe00b89aa59f5c9315446f09cebc06dc = $this->env->getExtension("native_profiler");
        $__internal_581b8cc7d0b421bff50ea5ec90922565fe00b89aa59f5c9315446f09cebc06dc->enter($__internal_581b8cc7d0b421bff50ea5ec90922565fe00b89aa59f5c9315446f09cebc06dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_581b8cc7d0b421bff50ea5ec90922565fe00b89aa59f5c9315446f09cebc06dc->leave($__internal_581b8cc7d0b421bff50ea5ec90922565fe00b89aa59f5c9315446f09cebc06dc_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_beb0072bc3dbe4cc59265bd8b541ac5ad922ae9605e04c085c8e65e6dc7ea1f2 = $this->env->getExtension("native_profiler");
        $__internal_beb0072bc3dbe4cc59265bd8b541ac5ad922ae9605e04c085c8e65e6dc7ea1f2->enter($__internal_beb0072bc3dbe4cc59265bd8b541ac5ad922ae9605e04c085c8e65e6dc7ea1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_beb0072bc3dbe4cc59265bd8b541ac5ad922ae9605e04c085c8e65e6dc7ea1f2->leave($__internal_beb0072bc3dbe4cc59265bd8b541ac5ad922ae9605e04c085c8e65e6dc7ea1f2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09b36b02a3bf3f6853eec1315b90f3e603486cce62ec2d49d803312fed6d6718 = $this->env->getExtension("native_profiler");
        $__internal_09b36b02a3bf3f6853eec1315b90f3e603486cce62ec2d49d803312fed6d6718->enter($__internal_09b36b02a3bf3f6853eec1315b90f3e603486cce62ec2d49d803312fed6d6718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_09b36b02a3bf3f6853eec1315b90f3e603486cce62ec2d49d803312fed6d6718->leave($__internal_09b36b02a3bf3f6853eec1315b90f3e603486cce62ec2d49d803312fed6d6718_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9582bda8387b00dad43703fc19d53d4a487fa1a5890e1941962757025d370766 = $this->env->getExtension("native_profiler");
        $__internal_9582bda8387b00dad43703fc19d53d4a487fa1a5890e1941962757025d370766->enter($__internal_9582bda8387b00dad43703fc19d53d4a487fa1a5890e1941962757025d370766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_9582bda8387b00dad43703fc19d53d4a487fa1a5890e1941962757025d370766->leave($__internal_9582bda8387b00dad43703fc19d53d4a487fa1a5890e1941962757025d370766_prof);

    }

    public function getTemplateName()
    {
        return ":article:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}{{ title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
