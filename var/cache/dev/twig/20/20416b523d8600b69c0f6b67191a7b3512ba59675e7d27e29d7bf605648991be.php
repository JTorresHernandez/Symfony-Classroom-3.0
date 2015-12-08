<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e161218ef9715eb10a0b697ba0491f84517016e7433d2f73c81f98b73301b2b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efb7fb9ac422785b73906d9725aabdd226bc1d5053696d2364a3d2ccca22c3b2 = $this->env->getExtension("native_profiler");
        $__internal_efb7fb9ac422785b73906d9725aabdd226bc1d5053696d2364a3d2ccca22c3b2->enter($__internal_efb7fb9ac422785b73906d9725aabdd226bc1d5053696d2364a3d2ccca22c3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb7fb9ac422785b73906d9725aabdd226bc1d5053696d2364a3d2ccca22c3b2->leave($__internal_efb7fb9ac422785b73906d9725aabdd226bc1d5053696d2364a3d2ccca22c3b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11c77f9460bd95168a3b5a6600f3d422e3d3309e45149a99dd125ef93571dba0 = $this->env->getExtension("native_profiler");
        $__internal_11c77f9460bd95168a3b5a6600f3d422e3d3309e45149a99dd125ef93571dba0->enter($__internal_11c77f9460bd95168a3b5a6600f3d422e3d3309e45149a99dd125ef93571dba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_11c77f9460bd95168a3b5a6600f3d422e3d3309e45149a99dd125ef93571dba0->leave($__internal_11c77f9460bd95168a3b5a6600f3d422e3d3309e45149a99dd125ef93571dba0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b00b5e7d1819dac727fdd34a9d757cc8dd0a83f90e34f4054e407d3547b99865 = $this->env->getExtension("native_profiler");
        $__internal_b00b5e7d1819dac727fdd34a9d757cc8dd0a83f90e34f4054e407d3547b99865->enter($__internal_b00b5e7d1819dac727fdd34a9d757cc8dd0a83f90e34f4054e407d3547b99865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b00b5e7d1819dac727fdd34a9d757cc8dd0a83f90e34f4054e407d3547b99865->leave($__internal_b00b5e7d1819dac727fdd34a9d757cc8dd0a83f90e34f4054e407d3547b99865_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a76804db7f55f31766ceb53abfa5e5600bb765fe215603192848e7b78a676de = $this->env->getExtension("native_profiler");
        $__internal_1a76804db7f55f31766ceb53abfa5e5600bb765fe215603192848e7b78a676de->enter($__internal_1a76804db7f55f31766ceb53abfa5e5600bb765fe215603192848e7b78a676de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1a76804db7f55f31766ceb53abfa5e5600bb765fe215603192848e7b78a676de->leave($__internal_1a76804db7f55f31766ceb53abfa5e5600bb765fe215603192848e7b78a676de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
