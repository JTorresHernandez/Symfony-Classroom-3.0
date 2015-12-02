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
        $__internal_f284a333e9c5fe820539fe2105659785a0f7c61c70433d24c59aef7a77dc8ebc = $this->env->getExtension("native_profiler");
        $__internal_f284a333e9c5fe820539fe2105659785a0f7c61c70433d24c59aef7a77dc8ebc->enter($__internal_f284a333e9c5fe820539fe2105659785a0f7c61c70433d24c59aef7a77dc8ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f284a333e9c5fe820539fe2105659785a0f7c61c70433d24c59aef7a77dc8ebc->leave($__internal_f284a333e9c5fe820539fe2105659785a0f7c61c70433d24c59aef7a77dc8ebc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b1fe4042e42d4ead6d952a418f88050661c91420727f01cb4edf77e7f8645bf = $this->env->getExtension("native_profiler");
        $__internal_4b1fe4042e42d4ead6d952a418f88050661c91420727f01cb4edf77e7f8645bf->enter($__internal_4b1fe4042e42d4ead6d952a418f88050661c91420727f01cb4edf77e7f8645bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4b1fe4042e42d4ead6d952a418f88050661c91420727f01cb4edf77e7f8645bf->leave($__internal_4b1fe4042e42d4ead6d952a418f88050661c91420727f01cb4edf77e7f8645bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_707668e604240b55320a1ef7cb853b2190b42274f671dd8ccafc028562352e59 = $this->env->getExtension("native_profiler");
        $__internal_707668e604240b55320a1ef7cb853b2190b42274f671dd8ccafc028562352e59->enter($__internal_707668e604240b55320a1ef7cb853b2190b42274f671dd8ccafc028562352e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_707668e604240b55320a1ef7cb853b2190b42274f671dd8ccafc028562352e59->leave($__internal_707668e604240b55320a1ef7cb853b2190b42274f671dd8ccafc028562352e59_prof);

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
