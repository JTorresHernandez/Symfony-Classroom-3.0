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
        $__internal_01c0e94b263c93f0f863cf4221788c63d998c987ee2adeef58c74651b3c76623 = $this->env->getExtension("native_profiler");
        $__internal_01c0e94b263c93f0f863cf4221788c63d998c987ee2adeef58c74651b3c76623->enter($__internal_01c0e94b263c93f0f863cf4221788c63d998c987ee2adeef58c74651b3c76623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01c0e94b263c93f0f863cf4221788c63d998c987ee2adeef58c74651b3c76623->leave($__internal_01c0e94b263c93f0f863cf4221788c63d998c987ee2adeef58c74651b3c76623_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4441c54da7817d62ab62c189c781ca429a4d9800b582276d86a54b49df377c9 = $this->env->getExtension("native_profiler");
        $__internal_f4441c54da7817d62ab62c189c781ca429a4d9800b582276d86a54b49df377c9->enter($__internal_f4441c54da7817d62ab62c189c781ca429a4d9800b582276d86a54b49df377c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f4441c54da7817d62ab62c189c781ca429a4d9800b582276d86a54b49df377c9->leave($__internal_f4441c54da7817d62ab62c189c781ca429a4d9800b582276d86a54b49df377c9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a72ae07c4465ebed4068d78a3e50c9dd0b4cde7c47030b51a1b9fe42fd2c5af = $this->env->getExtension("native_profiler");
        $__internal_7a72ae07c4465ebed4068d78a3e50c9dd0b4cde7c47030b51a1b9fe42fd2c5af->enter($__internal_7a72ae07c4465ebed4068d78a3e50c9dd0b4cde7c47030b51a1b9fe42fd2c5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a72ae07c4465ebed4068d78a3e50c9dd0b4cde7c47030b51a1b9fe42fd2c5af->leave($__internal_7a72ae07c4465ebed4068d78a3e50c9dd0b4cde7c47030b51a1b9fe42fd2c5af_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c67aa1a050bfea3041940759ec24e47be3e1b114bb1ba64a6503f072a2332182 = $this->env->getExtension("native_profiler");
        $__internal_c67aa1a050bfea3041940759ec24e47be3e1b114bb1ba64a6503f072a2332182->enter($__internal_c67aa1a050bfea3041940759ec24e47be3e1b114bb1ba64a6503f072a2332182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c67aa1a050bfea3041940759ec24e47be3e1b114bb1ba64a6503f072a2332182->leave($__internal_c67aa1a050bfea3041940759ec24e47be3e1b114bb1ba64a6503f072a2332182_prof);

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
