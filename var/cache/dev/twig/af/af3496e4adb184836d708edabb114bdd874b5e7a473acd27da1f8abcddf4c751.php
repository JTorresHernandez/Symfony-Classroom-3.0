<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9d9d3339ef4407a130538e813c83c6d7f14820f26522ae903bd7b52f87aff852 extends Twig_Template
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
        $__internal_b38a9d2e458b92ae98fa44cf4fd98bf21af26490bf72c1b171dbad653ac9763f = $this->env->getExtension("native_profiler");
        $__internal_b38a9d2e458b92ae98fa44cf4fd98bf21af26490bf72c1b171dbad653ac9763f->enter($__internal_b38a9d2e458b92ae98fa44cf4fd98bf21af26490bf72c1b171dbad653ac9763f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b38a9d2e458b92ae98fa44cf4fd98bf21af26490bf72c1b171dbad653ac9763f->leave($__internal_b38a9d2e458b92ae98fa44cf4fd98bf21af26490bf72c1b171dbad653ac9763f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ae69ad918d7002eb1715d6621c528d0212f52ae5f5ae2cc079112824c4daca4 = $this->env->getExtension("native_profiler");
        $__internal_7ae69ad918d7002eb1715d6621c528d0212f52ae5f5ae2cc079112824c4daca4->enter($__internal_7ae69ad918d7002eb1715d6621c528d0212f52ae5f5ae2cc079112824c4daca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ae69ad918d7002eb1715d6621c528d0212f52ae5f5ae2cc079112824c4daca4->leave($__internal_7ae69ad918d7002eb1715d6621c528d0212f52ae5f5ae2cc079112824c4daca4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb01e82c90f702bf7411fce8d9a8367955c2d9f2d1a6b22c341bf87778a77ae3 = $this->env->getExtension("native_profiler");
        $__internal_cb01e82c90f702bf7411fce8d9a8367955c2d9f2d1a6b22c341bf87778a77ae3->enter($__internal_cb01e82c90f702bf7411fce8d9a8367955c2d9f2d1a6b22c341bf87778a77ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb01e82c90f702bf7411fce8d9a8367955c2d9f2d1a6b22c341bf87778a77ae3->leave($__internal_cb01e82c90f702bf7411fce8d9a8367955c2d9f2d1a6b22c341bf87778a77ae3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecb16850f2568685b68202e5dfe29ef427600e22ba9f9f0e449f55c3de861128 = $this->env->getExtension("native_profiler");
        $__internal_ecb16850f2568685b68202e5dfe29ef427600e22ba9f9f0e449f55c3de861128->enter($__internal_ecb16850f2568685b68202e5dfe29ef427600e22ba9f9f0e449f55c3de861128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ecb16850f2568685b68202e5dfe29ef427600e22ba9f9f0e449f55c3de861128->leave($__internal_ecb16850f2568685b68202e5dfe29ef427600e22ba9f9f0e449f55c3de861128_prof);

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
