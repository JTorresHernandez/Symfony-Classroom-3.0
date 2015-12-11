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
        $__internal_2fdb2d19b33b577cc542a972342ecd1a21ffd73bcf6bbe24f1df5e144a73a0ba = $this->env->getExtension("native_profiler");
        $__internal_2fdb2d19b33b577cc542a972342ecd1a21ffd73bcf6bbe24f1df5e144a73a0ba->enter($__internal_2fdb2d19b33b577cc542a972342ecd1a21ffd73bcf6bbe24f1df5e144a73a0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fdb2d19b33b577cc542a972342ecd1a21ffd73bcf6bbe24f1df5e144a73a0ba->leave($__internal_2fdb2d19b33b577cc542a972342ecd1a21ffd73bcf6bbe24f1df5e144a73a0ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ab7215deeee9bfa0cc7ba3b16cfaa265e05b45e5f2e23893f5ffca9fa93339a = $this->env->getExtension("native_profiler");
        $__internal_5ab7215deeee9bfa0cc7ba3b16cfaa265e05b45e5f2e23893f5ffca9fa93339a->enter($__internal_5ab7215deeee9bfa0cc7ba3b16cfaa265e05b45e5f2e23893f5ffca9fa93339a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5ab7215deeee9bfa0cc7ba3b16cfaa265e05b45e5f2e23893f5ffca9fa93339a->leave($__internal_5ab7215deeee9bfa0cc7ba3b16cfaa265e05b45e5f2e23893f5ffca9fa93339a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_32c69cff88bf04ac7f8e3cf6246558553e70b7da50f15357612b1fff98af6f9f = $this->env->getExtension("native_profiler");
        $__internal_32c69cff88bf04ac7f8e3cf6246558553e70b7da50f15357612b1fff98af6f9f->enter($__internal_32c69cff88bf04ac7f8e3cf6246558553e70b7da50f15357612b1fff98af6f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_32c69cff88bf04ac7f8e3cf6246558553e70b7da50f15357612b1fff98af6f9f->leave($__internal_32c69cff88bf04ac7f8e3cf6246558553e70b7da50f15357612b1fff98af6f9f_prof);

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
