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
        $__internal_1e7003a13ed9f9b92577fc924fe30a7b1ede9a6c7e5c158582ea0278f296c7d3 = $this->env->getExtension("native_profiler");
        $__internal_1e7003a13ed9f9b92577fc924fe30a7b1ede9a6c7e5c158582ea0278f296c7d3->enter($__internal_1e7003a13ed9f9b92577fc924fe30a7b1ede9a6c7e5c158582ea0278f296c7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e7003a13ed9f9b92577fc924fe30a7b1ede9a6c7e5c158582ea0278f296c7d3->leave($__internal_1e7003a13ed9f9b92577fc924fe30a7b1ede9a6c7e5c158582ea0278f296c7d3_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_1721d02f7f8a79291f6c03d5c72a777dd6234ccaf2e2d700a807bc0abb9f65fb = $this->env->getExtension("native_profiler");
        $__internal_1721d02f7f8a79291f6c03d5c72a777dd6234ccaf2e2d700a807bc0abb9f65fb->enter($__internal_1721d02f7f8a79291f6c03d5c72a777dd6234ccaf2e2d700a807bc0abb9f65fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_1721d02f7f8a79291f6c03d5c72a777dd6234ccaf2e2d700a807bc0abb9f65fb->leave($__internal_1721d02f7f8a79291f6c03d5c72a777dd6234ccaf2e2d700a807bc0abb9f65fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9a4cefd31c537fe6b49b2c2094fa388f68752efe66acb7a67aec3928917d917 = $this->env->getExtension("native_profiler");
        $__internal_c9a4cefd31c537fe6b49b2c2094fa388f68752efe66acb7a67aec3928917d917->enter($__internal_c9a4cefd31c537fe6b49b2c2094fa388f68752efe66acb7a67aec3928917d917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_c9a4cefd31c537fe6b49b2c2094fa388f68752efe66acb7a67aec3928917d917->leave($__internal_c9a4cefd31c537fe6b49b2c2094fa388f68752efe66acb7a67aec3928917d917_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9ce81796fab056d10034a1be75ffe340adf38b46dcf23e0374725d927a03ba66 = $this->env->getExtension("native_profiler");
        $__internal_9ce81796fab056d10034a1be75ffe340adf38b46dcf23e0374725d927a03ba66->enter($__internal_9ce81796fab056d10034a1be75ffe340adf38b46dcf23e0374725d927a03ba66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_9ce81796fab056d10034a1be75ffe340adf38b46dcf23e0374725d927a03ba66->leave($__internal_9ce81796fab056d10034a1be75ffe340adf38b46dcf23e0374725d927a03ba66_prof);

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
