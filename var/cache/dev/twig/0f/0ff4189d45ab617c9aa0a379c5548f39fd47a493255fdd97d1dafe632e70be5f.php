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
        $__internal_13cfeca8cb5f25fa3235d618db2ec91b4a939265f278ba9bd085407b468308d8 = $this->env->getExtension("native_profiler");
        $__internal_13cfeca8cb5f25fa3235d618db2ec91b4a939265f278ba9bd085407b468308d8->enter($__internal_13cfeca8cb5f25fa3235d618db2ec91b4a939265f278ba9bd085407b468308d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13cfeca8cb5f25fa3235d618db2ec91b4a939265f278ba9bd085407b468308d8->leave($__internal_13cfeca8cb5f25fa3235d618db2ec91b4a939265f278ba9bd085407b468308d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4d0fa2b8940cddf3ba7f9173a76078894a293e6adc38cb94e7dccdc9f655843 = $this->env->getExtension("native_profiler");
        $__internal_d4d0fa2b8940cddf3ba7f9173a76078894a293e6adc38cb94e7dccdc9f655843->enter($__internal_d4d0fa2b8940cddf3ba7f9173a76078894a293e6adc38cb94e7dccdc9f655843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d4d0fa2b8940cddf3ba7f9173a76078894a293e6adc38cb94e7dccdc9f655843->leave($__internal_d4d0fa2b8940cddf3ba7f9173a76078894a293e6adc38cb94e7dccdc9f655843_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6cb581b9603d3e4e31d9e57e14009cfdcd4c38a3bafa587c792a4e8217c62b3 = $this->env->getExtension("native_profiler");
        $__internal_b6cb581b9603d3e4e31d9e57e14009cfdcd4c38a3bafa587c792a4e8217c62b3->enter($__internal_b6cb581b9603d3e4e31d9e57e14009cfdcd4c38a3bafa587c792a4e8217c62b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b6cb581b9603d3e4e31d9e57e14009cfdcd4c38a3bafa587c792a4e8217c62b3->leave($__internal_b6cb581b9603d3e4e31d9e57e14009cfdcd4c38a3bafa587c792a4e8217c62b3_prof);

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
