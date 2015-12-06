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
        $__internal_93cbce4498ef6318fe6203e6a6aa619f5b31469155c5d5039a5f7180bdff7b0b = $this->env->getExtension("native_profiler");
        $__internal_93cbce4498ef6318fe6203e6a6aa619f5b31469155c5d5039a5f7180bdff7b0b->enter($__internal_93cbce4498ef6318fe6203e6a6aa619f5b31469155c5d5039a5f7180bdff7b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93cbce4498ef6318fe6203e6a6aa619f5b31469155c5d5039a5f7180bdff7b0b->leave($__internal_93cbce4498ef6318fe6203e6a6aa619f5b31469155c5d5039a5f7180bdff7b0b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3df12dba411835213029a25aba5bb89a30cc346bc2bdbdfdfbe424965af0673c = $this->env->getExtension("native_profiler");
        $__internal_3df12dba411835213029a25aba5bb89a30cc346bc2bdbdfdfbe424965af0673c->enter($__internal_3df12dba411835213029a25aba5bb89a30cc346bc2bdbdfdfbe424965af0673c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3df12dba411835213029a25aba5bb89a30cc346bc2bdbdfdfbe424965af0673c->leave($__internal_3df12dba411835213029a25aba5bb89a30cc346bc2bdbdfdfbe424965af0673c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbe63695b1f4e9b51c0e03255446f647ba6592a89f47b8bd37ca5ca6ce10b0cb = $this->env->getExtension("native_profiler");
        $__internal_dbe63695b1f4e9b51c0e03255446f647ba6592a89f47b8bd37ca5ca6ce10b0cb->enter($__internal_dbe63695b1f4e9b51c0e03255446f647ba6592a89f47b8bd37ca5ca6ce10b0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dbe63695b1f4e9b51c0e03255446f647ba6592a89f47b8bd37ca5ca6ce10b0cb->leave($__internal_dbe63695b1f4e9b51c0e03255446f647ba6592a89f47b8bd37ca5ca6ce10b0cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dcf495361ce68d099aed3d04ed7481b0abe218f81887f26385f6baab11a2ac5 = $this->env->getExtension("native_profiler");
        $__internal_6dcf495361ce68d099aed3d04ed7481b0abe218f81887f26385f6baab11a2ac5->enter($__internal_6dcf495361ce68d099aed3d04ed7481b0abe218f81887f26385f6baab11a2ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6dcf495361ce68d099aed3d04ed7481b0abe218f81887f26385f6baab11a2ac5->leave($__internal_6dcf495361ce68d099aed3d04ed7481b0abe218f81887f26385f6baab11a2ac5_prof);

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
