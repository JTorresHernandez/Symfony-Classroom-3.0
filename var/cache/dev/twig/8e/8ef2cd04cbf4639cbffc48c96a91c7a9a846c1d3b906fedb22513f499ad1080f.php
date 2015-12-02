<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b515f127a2c334028715133dc0947c458b6288d49a1651b24ce61ba31510f60c extends Twig_Template
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
        $__internal_e8139be9c2b93949960041c3138548d8df794cb572f46b2e22394f527027f669 = $this->env->getExtension("native_profiler");
        $__internal_e8139be9c2b93949960041c3138548d8df794cb572f46b2e22394f527027f669->enter($__internal_e8139be9c2b93949960041c3138548d8df794cb572f46b2e22394f527027f669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8139be9c2b93949960041c3138548d8df794cb572f46b2e22394f527027f669->leave($__internal_e8139be9c2b93949960041c3138548d8df794cb572f46b2e22394f527027f669_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4b6e20910a5ba1817cc3654104f5f01e91c3e55983878c9a8d29da2fdc554d4 = $this->env->getExtension("native_profiler");
        $__internal_b4b6e20910a5ba1817cc3654104f5f01e91c3e55983878c9a8d29da2fdc554d4->enter($__internal_b4b6e20910a5ba1817cc3654104f5f01e91c3e55983878c9a8d29da2fdc554d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b4b6e20910a5ba1817cc3654104f5f01e91c3e55983878c9a8d29da2fdc554d4->leave($__internal_b4b6e20910a5ba1817cc3654104f5f01e91c3e55983878c9a8d29da2fdc554d4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d4be21e668ab8b5b6ee64a53c2d3b48e267800c6a690bf66530f9fea08f92c5 = $this->env->getExtension("native_profiler");
        $__internal_0d4be21e668ab8b5b6ee64a53c2d3b48e267800c6a690bf66530f9fea08f92c5->enter($__internal_0d4be21e668ab8b5b6ee64a53c2d3b48e267800c6a690bf66530f9fea08f92c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0d4be21e668ab8b5b6ee64a53c2d3b48e267800c6a690bf66530f9fea08f92c5->leave($__internal_0d4be21e668ab8b5b6ee64a53c2d3b48e267800c6a690bf66530f9fea08f92c5_prof);

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
