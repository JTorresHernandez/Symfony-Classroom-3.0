<?php

/* :index:email.html.twig */
class __TwigTemplate_aba4f9b43a20c61dfe64b410470e46eec2d233f78cface87d9bb7d94b12b07dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":index:email.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57667994635f18fac955b3d59331d3906b22d32f7eb22e01aea1f7a236be7120 = $this->env->getExtension("native_profiler");
        $__internal_57667994635f18fac955b3d59331d3906b22d32f7eb22e01aea1f7a236be7120->enter($__internal_57667994635f18fac955b3d59331d3906b22d32f7eb22e01aea1f7a236be7120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57667994635f18fac955b3d59331d3906b22d32f7eb22e01aea1f7a236be7120->leave($__internal_57667994635f18fac955b3d59331d3906b22d32f7eb22e01aea1f7a236be7120_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_038416a62acb4c96136ba02ac46d6a67102295610c31bc05ad6698f1910eb934 = $this->env->getExtension("native_profiler");
        $__internal_038416a62acb4c96136ba02ac46d6a67102295610c31bc05ad6698f1910eb934->enter($__internal_038416a62acb4c96136ba02ac46d6a67102295610c31bc05ad6698f1910eb934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_038416a62acb4c96136ba02ac46d6a67102295610c31bc05ad6698f1910eb934->leave($__internal_038416a62acb4c96136ba02ac46d6a67102295610c31bc05ad6698f1910eb934_prof);

    }

    public function getTemplateName()
    {
        return ":index:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>Email was sent</div>*/
/* {% endblock %}*/
