<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a358c8b69e88bec36c89c126e248a061aed9f5f7d5a169b10ddb626f5caff3b4 extends Twig_Template
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
        $__internal_0347b309010052883f9a2f2f791ffbfa49a78dc26af611c513de3dbafff19737 = $this->env->getExtension("native_profiler");
        $__internal_0347b309010052883f9a2f2f791ffbfa49a78dc26af611c513de3dbafff19737->enter($__internal_0347b309010052883f9a2f2f791ffbfa49a78dc26af611c513de3dbafff19737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0347b309010052883f9a2f2f791ffbfa49a78dc26af611c513de3dbafff19737->leave($__internal_0347b309010052883f9a2f2f791ffbfa49a78dc26af611c513de3dbafff19737_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_947490300233ea09e7e4600d7602ee490062498d9aa9d39c6cbbd33a7eb37cc3 = $this->env->getExtension("native_profiler");
        $__internal_947490300233ea09e7e4600d7602ee490062498d9aa9d39c6cbbd33a7eb37cc3->enter($__internal_947490300233ea09e7e4600d7602ee490062498d9aa9d39c6cbbd33a7eb37cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_947490300233ea09e7e4600d7602ee490062498d9aa9d39c6cbbd33a7eb37cc3->leave($__internal_947490300233ea09e7e4600d7602ee490062498d9aa9d39c6cbbd33a7eb37cc3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_350120895dc32f0dccf3dbf7112f98b68fdd80958b5fe2f3a5c8aed8630a692f = $this->env->getExtension("native_profiler");
        $__internal_350120895dc32f0dccf3dbf7112f98b68fdd80958b5fe2f3a5c8aed8630a692f->enter($__internal_350120895dc32f0dccf3dbf7112f98b68fdd80958b5fe2f3a5c8aed8630a692f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_350120895dc32f0dccf3dbf7112f98b68fdd80958b5fe2f3a5c8aed8630a692f->leave($__internal_350120895dc32f0dccf3dbf7112f98b68fdd80958b5fe2f3a5c8aed8630a692f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf12d8fd70009742eb0faa16ad38f4262c600a832df7c4e63b2de78f82bc0b1d = $this->env->getExtension("native_profiler");
        $__internal_bf12d8fd70009742eb0faa16ad38f4262c600a832df7c4e63b2de78f82bc0b1d->enter($__internal_bf12d8fd70009742eb0faa16ad38f4262c600a832df7c4e63b2de78f82bc0b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bf12d8fd70009742eb0faa16ad38f4262c600a832df7c4e63b2de78f82bc0b1d->leave($__internal_bf12d8fd70009742eb0faa16ad38f4262c600a832df7c4e63b2de78f82bc0b1d_prof);

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
