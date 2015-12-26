<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_382245a0055b219081f771a0127125a93379fda2deb6248a71a767380f62db73 extends Twig_Template
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
        $__internal_e26276c4e08078548d3143976e810c5b36d42d2e293a9f271407b6d8f54c4404 = $this->env->getExtension("native_profiler");
        $__internal_e26276c4e08078548d3143976e810c5b36d42d2e293a9f271407b6d8f54c4404->enter($__internal_e26276c4e08078548d3143976e810c5b36d42d2e293a9f271407b6d8f54c4404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e26276c4e08078548d3143976e810c5b36d42d2e293a9f271407b6d8f54c4404->leave($__internal_e26276c4e08078548d3143976e810c5b36d42d2e293a9f271407b6d8f54c4404_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00b8f1a122d80129ef56c278bff71996efd8cc99092d0eadee5d3cf70440e978 = $this->env->getExtension("native_profiler");
        $__internal_00b8f1a122d80129ef56c278bff71996efd8cc99092d0eadee5d3cf70440e978->enter($__internal_00b8f1a122d80129ef56c278bff71996efd8cc99092d0eadee5d3cf70440e978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_00b8f1a122d80129ef56c278bff71996efd8cc99092d0eadee5d3cf70440e978->leave($__internal_00b8f1a122d80129ef56c278bff71996efd8cc99092d0eadee5d3cf70440e978_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9241b1cff5f208df521b983d88e7db14ee9048a35463ee0750e836d64d206106 = $this->env->getExtension("native_profiler");
        $__internal_9241b1cff5f208df521b983d88e7db14ee9048a35463ee0750e836d64d206106->enter($__internal_9241b1cff5f208df521b983d88e7db14ee9048a35463ee0750e836d64d206106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9241b1cff5f208df521b983d88e7db14ee9048a35463ee0750e836d64d206106->leave($__internal_9241b1cff5f208df521b983d88e7db14ee9048a35463ee0750e836d64d206106_prof);

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
