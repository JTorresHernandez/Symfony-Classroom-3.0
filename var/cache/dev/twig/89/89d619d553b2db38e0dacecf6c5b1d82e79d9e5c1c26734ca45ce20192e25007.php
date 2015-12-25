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
        $__internal_e6035358659c91bd25b6376a2f103b86cae35d6167bce72b7fdb302365cc5181 = $this->env->getExtension("native_profiler");
        $__internal_e6035358659c91bd25b6376a2f103b86cae35d6167bce72b7fdb302365cc5181->enter($__internal_e6035358659c91bd25b6376a2f103b86cae35d6167bce72b7fdb302365cc5181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6035358659c91bd25b6376a2f103b86cae35d6167bce72b7fdb302365cc5181->leave($__internal_e6035358659c91bd25b6376a2f103b86cae35d6167bce72b7fdb302365cc5181_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_126d5ae0e982662640a4c320fe55e52750beed7e37dff1d9268731a12d989036 = $this->env->getExtension("native_profiler");
        $__internal_126d5ae0e982662640a4c320fe55e52750beed7e37dff1d9268731a12d989036->enter($__internal_126d5ae0e982662640a4c320fe55e52750beed7e37dff1d9268731a12d989036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Dashboard";
        
        $__internal_126d5ae0e982662640a4c320fe55e52750beed7e37dff1d9268731a12d989036->leave($__internal_126d5ae0e982662640a4c320fe55e52750beed7e37dff1d9268731a12d989036_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f04d90322134dd82a4c01a9d09f42e2faae7aa83d2ecd1fa2843f9b9ac9c641 = $this->env->getExtension("native_profiler");
        $__internal_6f04d90322134dd82a4c01a9d09f42e2faae7aa83d2ecd1fa2843f9b9ac9c641->enter($__internal_6f04d90322134dd82a4c01a9d09f42e2faae7aa83d2ecd1fa2843f9b9ac9c641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <p>Welcome to dashboard</p>
    </div>
";
        
        $__internal_6f04d90322134dd82a4c01a9d09f42e2faae7aa83d2ecd1fa2843f9b9ac9c641->leave($__internal_6f04d90322134dd82a4c01a9d09f42e2faae7aa83d2ecd1fa2843f9b9ac9c641_prof);

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
