<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e161218ef9715eb10a0b697ba0491f84517016e7433d2f73c81f98b73301b2b2 extends Twig_Template
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
        $__internal_6469b93beb08c202321b69ceec5a31c51f12265b1f811728f99dc33923ddfe58 = $this->env->getExtension("native_profiler");
        $__internal_6469b93beb08c202321b69ceec5a31c51f12265b1f811728f99dc33923ddfe58->enter($__internal_6469b93beb08c202321b69ceec5a31c51f12265b1f811728f99dc33923ddfe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6469b93beb08c202321b69ceec5a31c51f12265b1f811728f99dc33923ddfe58->leave($__internal_6469b93beb08c202321b69ceec5a31c51f12265b1f811728f99dc33923ddfe58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27bc229472517703f3913a9a606663ec8d9be133b0ffa85dfe7ea0b5519635f6 = $this->env->getExtension("native_profiler");
        $__internal_27bc229472517703f3913a9a606663ec8d9be133b0ffa85dfe7ea0b5519635f6->enter($__internal_27bc229472517703f3913a9a606663ec8d9be133b0ffa85dfe7ea0b5519635f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_27bc229472517703f3913a9a606663ec8d9be133b0ffa85dfe7ea0b5519635f6->leave($__internal_27bc229472517703f3913a9a606663ec8d9be133b0ffa85dfe7ea0b5519635f6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d60fef5493440fb3dc5218799b5a6f8340e3f2058c1c4194024f294d5a02a61 = $this->env->getExtension("native_profiler");
        $__internal_0d60fef5493440fb3dc5218799b5a6f8340e3f2058c1c4194024f294d5a02a61->enter($__internal_0d60fef5493440fb3dc5218799b5a6f8340e3f2058c1c4194024f294d5a02a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d60fef5493440fb3dc5218799b5a6f8340e3f2058c1c4194024f294d5a02a61->leave($__internal_0d60fef5493440fb3dc5218799b5a6f8340e3f2058c1c4194024f294d5a02a61_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e083800d4ac37311d05f5a3a2ee9037a40d39bd57028d5a6f60d4fa7660439f7 = $this->env->getExtension("native_profiler");
        $__internal_e083800d4ac37311d05f5a3a2ee9037a40d39bd57028d5a6f60d4fa7660439f7->enter($__internal_e083800d4ac37311d05f5a3a2ee9037a40d39bd57028d5a6f60d4fa7660439f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e083800d4ac37311d05f5a3a2ee9037a40d39bd57028d5a6f60d4fa7660439f7->leave($__internal_e083800d4ac37311d05f5a3a2ee9037a40d39bd57028d5a6f60d4fa7660439f7_prof);

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
