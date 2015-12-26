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
        $__internal_706a1887d2deb0b6ea11b3f1e5548c10f7343933b44ba1dffb29fe192fd9a86b = $this->env->getExtension("native_profiler");
        $__internal_706a1887d2deb0b6ea11b3f1e5548c10f7343933b44ba1dffb29fe192fd9a86b->enter($__internal_706a1887d2deb0b6ea11b3f1e5548c10f7343933b44ba1dffb29fe192fd9a86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_706a1887d2deb0b6ea11b3f1e5548c10f7343933b44ba1dffb29fe192fd9a86b->leave($__internal_706a1887d2deb0b6ea11b3f1e5548c10f7343933b44ba1dffb29fe192fd9a86b_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_abb32e8410c7108a394150a78c1e9d4bdc5b989601c9e4a2db4821941a4c75d3 = $this->env->getExtension("native_profiler");
        $__internal_abb32e8410c7108a394150a78c1e9d4bdc5b989601c9e4a2db4821941a4c75d3->enter($__internal_abb32e8410c7108a394150a78c1e9d4bdc5b989601c9e4a2db4821941a4c75d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_abb32e8410c7108a394150a78c1e9d4bdc5b989601c9e4a2db4821941a4c75d3->leave($__internal_abb32e8410c7108a394150a78c1e9d4bdc5b989601c9e4a2db4821941a4c75d3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b335465ae03ccf965fc3ba15e533595fc90e21b4e04d8be513e9fd7f04ed263 = $this->env->getExtension("native_profiler");
        $__internal_8b335465ae03ccf965fc3ba15e533595fc90e21b4e04d8be513e9fd7f04ed263->enter($__internal_8b335465ae03ccf965fc3ba15e533595fc90e21b4e04d8be513e9fd7f04ed263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_8b335465ae03ccf965fc3ba15e533595fc90e21b4e04d8be513e9fd7f04ed263->leave($__internal_8b335465ae03ccf965fc3ba15e533595fc90e21b4e04d8be513e9fd7f04ed263_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_69c78b30c0f1dd148d5b3fea6c997b1ff9691aebe2b3623d8d3dc0de374fde29 = $this->env->getExtension("native_profiler");
        $__internal_69c78b30c0f1dd148d5b3fea6c997b1ff9691aebe2b3623d8d3dc0de374fde29->enter($__internal_69c78b30c0f1dd148d5b3fea6c997b1ff9691aebe2b3623d8d3dc0de374fde29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_69c78b30c0f1dd148d5b3fea6c997b1ff9691aebe2b3623d8d3dc0de374fde29->leave($__internal_69c78b30c0f1dd148d5b3fea6c997b1ff9691aebe2b3623d8d3dc0de374fde29_prof);

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
