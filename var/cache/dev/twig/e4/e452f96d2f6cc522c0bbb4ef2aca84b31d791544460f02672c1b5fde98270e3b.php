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
        $__internal_5b48b47d7b0d6686cd7f3baaf92bccb9381b40ee2a0d9fd7bf12fbc4dbddb7d1 = $this->env->getExtension("native_profiler");
        $__internal_5b48b47d7b0d6686cd7f3baaf92bccb9381b40ee2a0d9fd7bf12fbc4dbddb7d1->enter($__internal_5b48b47d7b0d6686cd7f3baaf92bccb9381b40ee2a0d9fd7bf12fbc4dbddb7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b48b47d7b0d6686cd7f3baaf92bccb9381b40ee2a0d9fd7bf12fbc4dbddb7d1->leave($__internal_5b48b47d7b0d6686cd7f3baaf92bccb9381b40ee2a0d9fd7bf12fbc4dbddb7d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37edeae3cd7a32297cd5e1e74a75d0b0da1ab109d2c7a2f1c9e949537d479b81 = $this->env->getExtension("native_profiler");
        $__internal_37edeae3cd7a32297cd5e1e74a75d0b0da1ab109d2c7a2f1c9e949537d479b81->enter($__internal_37edeae3cd7a32297cd5e1e74a75d0b0da1ab109d2c7a2f1c9e949537d479b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_37edeae3cd7a32297cd5e1e74a75d0b0da1ab109d2c7a2f1c9e949537d479b81->leave($__internal_37edeae3cd7a32297cd5e1e74a75d0b0da1ab109d2c7a2f1c9e949537d479b81_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44299c3863b33d2c1725d11635f5274205dcbc6fddcd45637cbafd9ef42771ac = $this->env->getExtension("native_profiler");
        $__internal_44299c3863b33d2c1725d11635f5274205dcbc6fddcd45637cbafd9ef42771ac->enter($__internal_44299c3863b33d2c1725d11635f5274205dcbc6fddcd45637cbafd9ef42771ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_44299c3863b33d2c1725d11635f5274205dcbc6fddcd45637cbafd9ef42771ac->leave($__internal_44299c3863b33d2c1725d11635f5274205dcbc6fddcd45637cbafd9ef42771ac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bd51130cdc51108bf525035ad0c672c98693c90e95ff526eb07210ffdbed5f7 = $this->env->getExtension("native_profiler");
        $__internal_0bd51130cdc51108bf525035ad0c672c98693c90e95ff526eb07210ffdbed5f7->enter($__internal_0bd51130cdc51108bf525035ad0c672c98693c90e95ff526eb07210ffdbed5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0bd51130cdc51108bf525035ad0c672c98693c90e95ff526eb07210ffdbed5f7->leave($__internal_0bd51130cdc51108bf525035ad0c672c98693c90e95ff526eb07210ffdbed5f7_prof);

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
