<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4076de56276e5c7728ec045f88957d5f91a8725f30d9c217e0d5dc330531279e extends Twig_Template
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
        $__internal_37c10cb1686b503c2ca488d0bb3bffa3d55c11116273bacd44471ff622c30186 = $this->env->getExtension("native_profiler");
        $__internal_37c10cb1686b503c2ca488d0bb3bffa3d55c11116273bacd44471ff622c30186->enter($__internal_37c10cb1686b503c2ca488d0bb3bffa3d55c11116273bacd44471ff622c30186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37c10cb1686b503c2ca488d0bb3bffa3d55c11116273bacd44471ff622c30186->leave($__internal_37c10cb1686b503c2ca488d0bb3bffa3d55c11116273bacd44471ff622c30186_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9c3a38937ea0dd941d280a700b851e33f08f3f2eec24cf00d53d0e8edfdfa9b = $this->env->getExtension("native_profiler");
        $__internal_f9c3a38937ea0dd941d280a700b851e33f08f3f2eec24cf00d53d0e8edfdfa9b->enter($__internal_f9c3a38937ea0dd941d280a700b851e33f08f3f2eec24cf00d53d0e8edfdfa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f9c3a38937ea0dd941d280a700b851e33f08f3f2eec24cf00d53d0e8edfdfa9b->leave($__internal_f9c3a38937ea0dd941d280a700b851e33f08f3f2eec24cf00d53d0e8edfdfa9b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb4b054caac5b0724d0dfdfe474ab42eb8a286f1ec2460484ddbc9d574f5834a = $this->env->getExtension("native_profiler");
        $__internal_cb4b054caac5b0724d0dfdfe474ab42eb8a286f1ec2460484ddbc9d574f5834a->enter($__internal_cb4b054caac5b0724d0dfdfe474ab42eb8a286f1ec2460484ddbc9d574f5834a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb4b054caac5b0724d0dfdfe474ab42eb8a286f1ec2460484ddbc9d574f5834a->leave($__internal_cb4b054caac5b0724d0dfdfe474ab42eb8a286f1ec2460484ddbc9d574f5834a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b796f9f1be43661bc470d061eaffe047d03b588c08613a06adfd5615d9241340 = $this->env->getExtension("native_profiler");
        $__internal_b796f9f1be43661bc470d061eaffe047d03b588c08613a06adfd5615d9241340->enter($__internal_b796f9f1be43661bc470d061eaffe047d03b588c08613a06adfd5615d9241340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b796f9f1be43661bc470d061eaffe047d03b588c08613a06adfd5615d9241340->leave($__internal_b796f9f1be43661bc470d061eaffe047d03b588c08613a06adfd5615d9241340_prof);

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
