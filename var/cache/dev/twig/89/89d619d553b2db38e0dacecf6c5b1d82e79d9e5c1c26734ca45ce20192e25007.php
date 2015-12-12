<?php

/* :admin/index:index.html.twig */
class __TwigTemplate_90d17780bbaebf6e7246c718c5f193e9540846ff1040d475697c2f30d3a66263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":admin:admin_layout.html.twig", ":admin/index:index.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":admin:admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe2cad465b908a02d14ace6b65f7208ece1be0a032eda9a4a881ce8fbbc3cd7c = $this->env->getExtension("native_profiler");
        $__internal_fe2cad465b908a02d14ace6b65f7208ece1be0a032eda9a4a881ce8fbbc3cd7c->enter($__internal_fe2cad465b908a02d14ace6b65f7208ece1be0a032eda9a4a881ce8fbbc3cd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe2cad465b908a02d14ace6b65f7208ece1be0a032eda9a4a881ce8fbbc3cd7c->leave($__internal_fe2cad465b908a02d14ace6b65f7208ece1be0a032eda9a4a881ce8fbbc3cd7c_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_9654dbc895960f71dbf899093ddd9aecc49ae4bb4756ee2e400f08a0c7f3bd51 = $this->env->getExtension("native_profiler");
        $__internal_9654dbc895960f71dbf899093ddd9aecc49ae4bb4756ee2e400f08a0c7f3bd51->enter($__internal_9654dbc895960f71dbf899093ddd9aecc49ae4bb4756ee2e400f08a0c7f3bd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Dashboard";
        
        $__internal_9654dbc895960f71dbf899093ddd9aecc49ae4bb4756ee2e400f08a0c7f3bd51->leave($__internal_9654dbc895960f71dbf899093ddd9aecc49ae4bb4756ee2e400f08a0c7f3bd51_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc5f3c44e225ed4b9e77e9595d14f2a63832cf8bed2407ffffa16f052c030d71 = $this->env->getExtension("native_profiler");
        $__internal_dc5f3c44e225ed4b9e77e9595d14f2a63832cf8bed2407ffffa16f052c030d71->enter($__internal_dc5f3c44e225ed4b9e77e9595d14f2a63832cf8bed2407ffffa16f052c030d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <p>Welcome to dashboard</p>
    </div>
";
        
        $__internal_dc5f3c44e225ed4b9e77e9595d14f2a63832cf8bed2407ffffa16f052c030d71->leave($__internal_dc5f3c44e225ed4b9e77e9595d14f2a63832cf8bed2407ffffa16f052c030d71_prof);

    }

    public function getTemplateName()
    {
        return ":admin/index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':admin:admin_layout.html.twig' %}*/
/* */
/* {% block headTitle %}Dashboard{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <p>Welcome to dashboard</p>*/
/*     </div>*/
/* {% endblock %}*/
