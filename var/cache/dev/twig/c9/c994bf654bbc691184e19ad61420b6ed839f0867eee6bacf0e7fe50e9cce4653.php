<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_089e503d0fa4cf8950405f31bf197a40a8297fa81757aa947f1b8e2297970d36 extends Twig_Template
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
        $__internal_c752016d94d4f224cf875a956160668b78ae223a29684632c0496a09b547b3ac = $this->env->getExtension("native_profiler");
        $__internal_c752016d94d4f224cf875a956160668b78ae223a29684632c0496a09b547b3ac->enter($__internal_c752016d94d4f224cf875a956160668b78ae223a29684632c0496a09b547b3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c752016d94d4f224cf875a956160668b78ae223a29684632c0496a09b547b3ac->leave($__internal_c752016d94d4f224cf875a956160668b78ae223a29684632c0496a09b547b3ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7c41baae4c39935630656d0b642f0f6cf883a9f43524177d0616fd2933f169e = $this->env->getExtension("native_profiler");
        $__internal_a7c41baae4c39935630656d0b642f0f6cf883a9f43524177d0616fd2933f169e->enter($__internal_a7c41baae4c39935630656d0b642f0f6cf883a9f43524177d0616fd2933f169e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a7c41baae4c39935630656d0b642f0f6cf883a9f43524177d0616fd2933f169e->leave($__internal_a7c41baae4c39935630656d0b642f0f6cf883a9f43524177d0616fd2933f169e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0f0277ad3ea01cdc2f917b157b47bca1f8ca425e489c7eb35c1ffa78091a34d = $this->env->getExtension("native_profiler");
        $__internal_a0f0277ad3ea01cdc2f917b157b47bca1f8ca425e489c7eb35c1ffa78091a34d->enter($__internal_a0f0277ad3ea01cdc2f917b157b47bca1f8ca425e489c7eb35c1ffa78091a34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0f0277ad3ea01cdc2f917b157b47bca1f8ca425e489c7eb35c1ffa78091a34d->leave($__internal_a0f0277ad3ea01cdc2f917b157b47bca1f8ca425e489c7eb35c1ffa78091a34d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b40f41ba2f813dd39bb6798d89bf7ee83bc8b3df90b3eb452deb61b35c62535 = $this->env->getExtension("native_profiler");
        $__internal_0b40f41ba2f813dd39bb6798d89bf7ee83bc8b3df90b3eb452deb61b35c62535->enter($__internal_0b40f41ba2f813dd39bb6798d89bf7ee83bc8b3df90b3eb452deb61b35c62535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0b40f41ba2f813dd39bb6798d89bf7ee83bc8b3df90b3eb452deb61b35c62535->leave($__internal_0b40f41ba2f813dd39bb6798d89bf7ee83bc8b3df90b3eb452deb61b35c62535_prof);

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
