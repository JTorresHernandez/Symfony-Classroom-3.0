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
        $__internal_14716fd43ec848e66b0c3b14e3a95d3836dcbcdc50c7b8c592b765cb8e001bde = $this->env->getExtension("native_profiler");
        $__internal_14716fd43ec848e66b0c3b14e3a95d3836dcbcdc50c7b8c592b765cb8e001bde->enter($__internal_14716fd43ec848e66b0c3b14e3a95d3836dcbcdc50c7b8c592b765cb8e001bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14716fd43ec848e66b0c3b14e3a95d3836dcbcdc50c7b8c592b765cb8e001bde->leave($__internal_14716fd43ec848e66b0c3b14e3a95d3836dcbcdc50c7b8c592b765cb8e001bde_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_80a11a84bdb1c0f281a7f25de0cb3f90f269f88ae6431bcd4b341ecf01ef8a3d = $this->env->getExtension("native_profiler");
        $__internal_80a11a84bdb1c0f281a7f25de0cb3f90f269f88ae6431bcd4b341ecf01ef8a3d->enter($__internal_80a11a84bdb1c0f281a7f25de0cb3f90f269f88ae6431bcd4b341ecf01ef8a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Dashboard";
        
        $__internal_80a11a84bdb1c0f281a7f25de0cb3f90f269f88ae6431bcd4b341ecf01ef8a3d->leave($__internal_80a11a84bdb1c0f281a7f25de0cb3f90f269f88ae6431bcd4b341ecf01ef8a3d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_141f4fcbab5752490125af8607657f5882b3f885ab6a4564ec998217a7ed8b41 = $this->env->getExtension("native_profiler");
        $__internal_141f4fcbab5752490125af8607657f5882b3f885ab6a4564ec998217a7ed8b41->enter($__internal_141f4fcbab5752490125af8607657f5882b3f885ab6a4564ec998217a7ed8b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <p>Welcome to dashboard</p>
    </div>
";
        
        $__internal_141f4fcbab5752490125af8607657f5882b3f885ab6a4564ec998217a7ed8b41->leave($__internal_141f4fcbab5752490125af8607657f5882b3f885ab6a4564ec998217a7ed8b41_prof);

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
