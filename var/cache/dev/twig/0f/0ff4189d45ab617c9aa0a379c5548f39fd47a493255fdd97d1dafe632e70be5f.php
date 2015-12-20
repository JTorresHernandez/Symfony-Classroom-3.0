<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3efe11a92ffa78b09bab9213952c8900defde4c25408a96a9df075bfcecc5d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_93250b269743e2940e98420d3146b0917ea14551ecbc3ded6c03497c0c5cd1bd = $this->env->getExtension("native_profiler");
        $__internal_93250b269743e2940e98420d3146b0917ea14551ecbc3ded6c03497c0c5cd1bd->enter($__internal_93250b269743e2940e98420d3146b0917ea14551ecbc3ded6c03497c0c5cd1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93250b269743e2940e98420d3146b0917ea14551ecbc3ded6c03497c0c5cd1bd->leave($__internal_93250b269743e2940e98420d3146b0917ea14551ecbc3ded6c03497c0c5cd1bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c6e73a52271045b29c5eb0e9599893ce3b50fda5d552c7be9470e735a0868fc = $this->env->getExtension("native_profiler");
        $__internal_6c6e73a52271045b29c5eb0e9599893ce3b50fda5d552c7be9470e735a0868fc->enter($__internal_6c6e73a52271045b29c5eb0e9599893ce3b50fda5d552c7be9470e735a0868fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6c6e73a52271045b29c5eb0e9599893ce3b50fda5d552c7be9470e735a0868fc->leave($__internal_6c6e73a52271045b29c5eb0e9599893ce3b50fda5d552c7be9470e735a0868fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6d22815220b4064c0ebc7c5ca5c72508c31a6f64a9d2cdd56e89b11919b4438 = $this->env->getExtension("native_profiler");
        $__internal_c6d22815220b4064c0ebc7c5ca5c72508c31a6f64a9d2cdd56e89b11919b4438->enter($__internal_c6d22815220b4064c0ebc7c5ca5c72508c31a6f64a9d2cdd56e89b11919b4438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c6d22815220b4064c0ebc7c5ca5c72508c31a6f64a9d2cdd56e89b11919b4438->leave($__internal_c6d22815220b4064c0ebc7c5ca5c72508c31a6f64a9d2cdd56e89b11919b4438_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
