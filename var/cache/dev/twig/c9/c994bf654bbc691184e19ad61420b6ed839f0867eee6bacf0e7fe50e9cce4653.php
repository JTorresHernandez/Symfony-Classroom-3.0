<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_089e503d0fa4cf8950405f31bf197a40a8297fa81757aa947f1b8e2297970d36 extends Twig_Template
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
        $__internal_9cf188072b6d6256c6e161e9ec75bbf88f023e7172fd0c572f11ad585e45af61 = $this->env->getExtension("native_profiler");
        $__internal_9cf188072b6d6256c6e161e9ec75bbf88f023e7172fd0c572f11ad585e45af61->enter($__internal_9cf188072b6d6256c6e161e9ec75bbf88f023e7172fd0c572f11ad585e45af61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cf188072b6d6256c6e161e9ec75bbf88f023e7172fd0c572f11ad585e45af61->leave($__internal_9cf188072b6d6256c6e161e9ec75bbf88f023e7172fd0c572f11ad585e45af61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f6c8bf2a9a394d014cf99150288837ece893feae9545c36d0a2c8ba5cae95e2 = $this->env->getExtension("native_profiler");
        $__internal_8f6c8bf2a9a394d014cf99150288837ece893feae9545c36d0a2c8ba5cae95e2->enter($__internal_8f6c8bf2a9a394d014cf99150288837ece893feae9545c36d0a2c8ba5cae95e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8f6c8bf2a9a394d014cf99150288837ece893feae9545c36d0a2c8ba5cae95e2->leave($__internal_8f6c8bf2a9a394d014cf99150288837ece893feae9545c36d0a2c8ba5cae95e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7b2f3599d903e05f22ed48b97748240a3f4b4b275584f8936021e06701fd827 = $this->env->getExtension("native_profiler");
        $__internal_f7b2f3599d903e05f22ed48b97748240a3f4b4b275584f8936021e06701fd827->enter($__internal_f7b2f3599d903e05f22ed48b97748240a3f4b4b275584f8936021e06701fd827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f7b2f3599d903e05f22ed48b97748240a3f4b4b275584f8936021e06701fd827->leave($__internal_f7b2f3599d903e05f22ed48b97748240a3f4b4b275584f8936021e06701fd827_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdcd60a119d2ada25dfc789c93b2144d6b39a306bc75c98d262c0cfc65fb8bee = $this->env->getExtension("native_profiler");
        $__internal_fdcd60a119d2ada25dfc789c93b2144d6b39a306bc75c98d262c0cfc65fb8bee->enter($__internal_fdcd60a119d2ada25dfc789c93b2144d6b39a306bc75c98d262c0cfc65fb8bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fdcd60a119d2ada25dfc789c93b2144d6b39a306bc75c98d262c0cfc65fb8bee->leave($__internal_fdcd60a119d2ada25dfc789c93b2144d6b39a306bc75c98d262c0cfc65fb8bee_prof);

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
