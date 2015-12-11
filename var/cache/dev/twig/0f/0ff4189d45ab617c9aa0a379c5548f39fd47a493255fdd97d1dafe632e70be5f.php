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
        $__internal_43861db6ce785f9d52bdcbe25b56954385066ef775ed32ba382814326f62613d = $this->env->getExtension("native_profiler");
        $__internal_43861db6ce785f9d52bdcbe25b56954385066ef775ed32ba382814326f62613d->enter($__internal_43861db6ce785f9d52bdcbe25b56954385066ef775ed32ba382814326f62613d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43861db6ce785f9d52bdcbe25b56954385066ef775ed32ba382814326f62613d->leave($__internal_43861db6ce785f9d52bdcbe25b56954385066ef775ed32ba382814326f62613d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9114f944d28573f746cc0b86fdd839c75dc672b6ba686974767f74ddb007528d = $this->env->getExtension("native_profiler");
        $__internal_9114f944d28573f746cc0b86fdd839c75dc672b6ba686974767f74ddb007528d->enter($__internal_9114f944d28573f746cc0b86fdd839c75dc672b6ba686974767f74ddb007528d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9114f944d28573f746cc0b86fdd839c75dc672b6ba686974767f74ddb007528d->leave($__internal_9114f944d28573f746cc0b86fdd839c75dc672b6ba686974767f74ddb007528d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_96ea2e8f2a94fd50539a9af6e889bc865dbbb6f5690202922ed62e9acb8f9d36 = $this->env->getExtension("native_profiler");
        $__internal_96ea2e8f2a94fd50539a9af6e889bc865dbbb6f5690202922ed62e9acb8f9d36->enter($__internal_96ea2e8f2a94fd50539a9af6e889bc865dbbb6f5690202922ed62e9acb8f9d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_96ea2e8f2a94fd50539a9af6e889bc865dbbb6f5690202922ed62e9acb8f9d36->leave($__internal_96ea2e8f2a94fd50539a9af6e889bc865dbbb6f5690202922ed62e9acb8f9d36_prof);

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
