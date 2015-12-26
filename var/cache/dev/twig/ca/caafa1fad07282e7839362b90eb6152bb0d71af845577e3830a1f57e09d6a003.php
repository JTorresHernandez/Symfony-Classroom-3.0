<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4076de56276e5c7728ec045f88957d5f91a8725f30d9c217e0d5dc330531279e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_987b4ca69a0503c568eb5d23ac446606171adeb48229923ab888ffddf2a15034 = $this->env->getExtension("native_profiler");
        $__internal_987b4ca69a0503c568eb5d23ac446606171adeb48229923ab888ffddf2a15034->enter($__internal_987b4ca69a0503c568eb5d23ac446606171adeb48229923ab888ffddf2a15034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_987b4ca69a0503c568eb5d23ac446606171adeb48229923ab888ffddf2a15034->leave($__internal_987b4ca69a0503c568eb5d23ac446606171adeb48229923ab888ffddf2a15034_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_58d4df229d604dd7cde5cf2fc7ccf83b9e377e6a5eaaf972e218bccb6c0af541 = $this->env->getExtension("native_profiler");
        $__internal_58d4df229d604dd7cde5cf2fc7ccf83b9e377e6a5eaaf972e218bccb6c0af541->enter($__internal_58d4df229d604dd7cde5cf2fc7ccf83b9e377e6a5eaaf972e218bccb6c0af541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_58d4df229d604dd7cde5cf2fc7ccf83b9e377e6a5eaaf972e218bccb6c0af541->leave($__internal_58d4df229d604dd7cde5cf2fc7ccf83b9e377e6a5eaaf972e218bccb6c0af541_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b6a0d0e0092268c5e02e7bcd2efe7c824332de7777dbc7c089888a2f6a76272 = $this->env->getExtension("native_profiler");
        $__internal_2b6a0d0e0092268c5e02e7bcd2efe7c824332de7777dbc7c089888a2f6a76272->enter($__internal_2b6a0d0e0092268c5e02e7bcd2efe7c824332de7777dbc7c089888a2f6a76272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b6a0d0e0092268c5e02e7bcd2efe7c824332de7777dbc7c089888a2f6a76272->leave($__internal_2b6a0d0e0092268c5e02e7bcd2efe7c824332de7777dbc7c089888a2f6a76272_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_546ca60412fa47b16fd0f90cb0e4dfa5c26e3dfa005dbf2a7721fb1d8e147366 = $this->env->getExtension("native_profiler");
        $__internal_546ca60412fa47b16fd0f90cb0e4dfa5c26e3dfa005dbf2a7721fb1d8e147366->enter($__internal_546ca60412fa47b16fd0f90cb0e4dfa5c26e3dfa005dbf2a7721fb1d8e147366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_546ca60412fa47b16fd0f90cb0e4dfa5c26e3dfa005dbf2a7721fb1d8e147366->leave($__internal_546ca60412fa47b16fd0f90cb0e4dfa5c26e3dfa005dbf2a7721fb1d8e147366_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
