<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4076de56276e5c7728ec045f88957d5f91a8725f30d9c217e0d5dc330531279e extends Twig_Template
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
        $__internal_f58802601d9d5f7d1b8a680f69a8fe438a90b6b65078c2a6a4e295c76d883df4 = $this->env->getExtension("native_profiler");
        $__internal_f58802601d9d5f7d1b8a680f69a8fe438a90b6b65078c2a6a4e295c76d883df4->enter($__internal_f58802601d9d5f7d1b8a680f69a8fe438a90b6b65078c2a6a4e295c76d883df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f58802601d9d5f7d1b8a680f69a8fe438a90b6b65078c2a6a4e295c76d883df4->leave($__internal_f58802601d9d5f7d1b8a680f69a8fe438a90b6b65078c2a6a4e295c76d883df4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77d4ddd7b8347ce3d33c8df1e136a306f3b0306ea20a18c604892ea0768b783d = $this->env->getExtension("native_profiler");
        $__internal_77d4ddd7b8347ce3d33c8df1e136a306f3b0306ea20a18c604892ea0768b783d->enter($__internal_77d4ddd7b8347ce3d33c8df1e136a306f3b0306ea20a18c604892ea0768b783d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_77d4ddd7b8347ce3d33c8df1e136a306f3b0306ea20a18c604892ea0768b783d->leave($__internal_77d4ddd7b8347ce3d33c8df1e136a306f3b0306ea20a18c604892ea0768b783d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_211271ba2cb44f3b70e6ac5d23a78c9b14190f78f98030853003b5b08fdc7cea = $this->env->getExtension("native_profiler");
        $__internal_211271ba2cb44f3b70e6ac5d23a78c9b14190f78f98030853003b5b08fdc7cea->enter($__internal_211271ba2cb44f3b70e6ac5d23a78c9b14190f78f98030853003b5b08fdc7cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_211271ba2cb44f3b70e6ac5d23a78c9b14190f78f98030853003b5b08fdc7cea->leave($__internal_211271ba2cb44f3b70e6ac5d23a78c9b14190f78f98030853003b5b08fdc7cea_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e88e3998ffa765a1ce1bd09fe3c00f800904d23681ac56c04ca5754192b7de2 = $this->env->getExtension("native_profiler");
        $__internal_2e88e3998ffa765a1ce1bd09fe3c00f800904d23681ac56c04ca5754192b7de2->enter($__internal_2e88e3998ffa765a1ce1bd09fe3c00f800904d23681ac56c04ca5754192b7de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2e88e3998ffa765a1ce1bd09fe3c00f800904d23681ac56c04ca5754192b7de2->leave($__internal_2e88e3998ffa765a1ce1bd09fe3c00f800904d23681ac56c04ca5754192b7de2_prof);

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
