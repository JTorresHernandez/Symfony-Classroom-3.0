<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_df4d6e9bcc6b1d3b4e96732216250d80e3dfce723d8c8ba1c0bbf72af70df39d extends Twig_Template
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
        $__internal_ca4b2df73fc6f0323c1cec133271872c30fbb735c76ebdccbe5ee029e38480d7 = $this->env->getExtension("native_profiler");
        $__internal_ca4b2df73fc6f0323c1cec133271872c30fbb735c76ebdccbe5ee029e38480d7->enter($__internal_ca4b2df73fc6f0323c1cec133271872c30fbb735c76ebdccbe5ee029e38480d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca4b2df73fc6f0323c1cec133271872c30fbb735c76ebdccbe5ee029e38480d7->leave($__internal_ca4b2df73fc6f0323c1cec133271872c30fbb735c76ebdccbe5ee029e38480d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c14e337b7b3d1742fe739ce0402cc0df4109ad9f416025cc6a2a8aa3b228c66 = $this->env->getExtension("native_profiler");
        $__internal_3c14e337b7b3d1742fe739ce0402cc0df4109ad9f416025cc6a2a8aa3b228c66->enter($__internal_3c14e337b7b3d1742fe739ce0402cc0df4109ad9f416025cc6a2a8aa3b228c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3c14e337b7b3d1742fe739ce0402cc0df4109ad9f416025cc6a2a8aa3b228c66->leave($__internal_3c14e337b7b3d1742fe739ce0402cc0df4109ad9f416025cc6a2a8aa3b228c66_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11b2dad2cc478b40a1f09945988a4689873ce69bc35ec3178d5429545507c69c = $this->env->getExtension("native_profiler");
        $__internal_11b2dad2cc478b40a1f09945988a4689873ce69bc35ec3178d5429545507c69c->enter($__internal_11b2dad2cc478b40a1f09945988a4689873ce69bc35ec3178d5429545507c69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_11b2dad2cc478b40a1f09945988a4689873ce69bc35ec3178d5429545507c69c->leave($__internal_11b2dad2cc478b40a1f09945988a4689873ce69bc35ec3178d5429545507c69c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8debe0d6a20a1a9b441d11424997115fb01aebd8696cadbc58ebdd262d43f32b = $this->env->getExtension("native_profiler");
        $__internal_8debe0d6a20a1a9b441d11424997115fb01aebd8696cadbc58ebdd262d43f32b->enter($__internal_8debe0d6a20a1a9b441d11424997115fb01aebd8696cadbc58ebdd262d43f32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8debe0d6a20a1a9b441d11424997115fb01aebd8696cadbc58ebdd262d43f32b->leave($__internal_8debe0d6a20a1a9b441d11424997115fb01aebd8696cadbc58ebdd262d43f32b_prof);

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
