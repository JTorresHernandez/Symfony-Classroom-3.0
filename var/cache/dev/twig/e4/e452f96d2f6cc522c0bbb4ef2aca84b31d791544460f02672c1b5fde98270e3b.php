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
        $__internal_87377c03b8602d0d6b9b1dc62a4fe20d172ae49f5dd1e5b2705af8171404504e = $this->env->getExtension("native_profiler");
        $__internal_87377c03b8602d0d6b9b1dc62a4fe20d172ae49f5dd1e5b2705af8171404504e->enter($__internal_87377c03b8602d0d6b9b1dc62a4fe20d172ae49f5dd1e5b2705af8171404504e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87377c03b8602d0d6b9b1dc62a4fe20d172ae49f5dd1e5b2705af8171404504e->leave($__internal_87377c03b8602d0d6b9b1dc62a4fe20d172ae49f5dd1e5b2705af8171404504e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ff64b0c52c37b420be93cd6022bd20a8fd54a423ee4a55e7e712783d09d43ed = $this->env->getExtension("native_profiler");
        $__internal_2ff64b0c52c37b420be93cd6022bd20a8fd54a423ee4a55e7e712783d09d43ed->enter($__internal_2ff64b0c52c37b420be93cd6022bd20a8fd54a423ee4a55e7e712783d09d43ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ff64b0c52c37b420be93cd6022bd20a8fd54a423ee4a55e7e712783d09d43ed->leave($__internal_2ff64b0c52c37b420be93cd6022bd20a8fd54a423ee4a55e7e712783d09d43ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a077ad7dff25bb89acf237d7f6af45e6618c703be5683853553cf5c927f9207d = $this->env->getExtension("native_profiler");
        $__internal_a077ad7dff25bb89acf237d7f6af45e6618c703be5683853553cf5c927f9207d->enter($__internal_a077ad7dff25bb89acf237d7f6af45e6618c703be5683853553cf5c927f9207d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a077ad7dff25bb89acf237d7f6af45e6618c703be5683853553cf5c927f9207d->leave($__internal_a077ad7dff25bb89acf237d7f6af45e6618c703be5683853553cf5c927f9207d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1bf898e14ef23ab72a0d78d1d0004bb5ee213fab7ce99765e96147cf487789e = $this->env->getExtension("native_profiler");
        $__internal_e1bf898e14ef23ab72a0d78d1d0004bb5ee213fab7ce99765e96147cf487789e->enter($__internal_e1bf898e14ef23ab72a0d78d1d0004bb5ee213fab7ce99765e96147cf487789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e1bf898e14ef23ab72a0d78d1d0004bb5ee213fab7ce99765e96147cf487789e->leave($__internal_e1bf898e14ef23ab72a0d78d1d0004bb5ee213fab7ce99765e96147cf487789e_prof);

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
