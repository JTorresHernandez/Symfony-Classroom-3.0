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
        $__internal_dd0e4e1c9b0f4c07a242cb69ac9c67706bcb9dc7968518a20f3df8a13b6f60ef = $this->env->getExtension("native_profiler");
        $__internal_dd0e4e1c9b0f4c07a242cb69ac9c67706bcb9dc7968518a20f3df8a13b6f60ef->enter($__internal_dd0e4e1c9b0f4c07a242cb69ac9c67706bcb9dc7968518a20f3df8a13b6f60ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd0e4e1c9b0f4c07a242cb69ac9c67706bcb9dc7968518a20f3df8a13b6f60ef->leave($__internal_dd0e4e1c9b0f4c07a242cb69ac9c67706bcb9dc7968518a20f3df8a13b6f60ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_38dae125e764c64900bb7478ca39de659e80298593bb2fe017818635b9f9e210 = $this->env->getExtension("native_profiler");
        $__internal_38dae125e764c64900bb7478ca39de659e80298593bb2fe017818635b9f9e210->enter($__internal_38dae125e764c64900bb7478ca39de659e80298593bb2fe017818635b9f9e210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_38dae125e764c64900bb7478ca39de659e80298593bb2fe017818635b9f9e210->leave($__internal_38dae125e764c64900bb7478ca39de659e80298593bb2fe017818635b9f9e210_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e4a440a112b1c92a9125c3f8bd61eee36fd739a45bc2604c7bae27d72e972e2 = $this->env->getExtension("native_profiler");
        $__internal_1e4a440a112b1c92a9125c3f8bd61eee36fd739a45bc2604c7bae27d72e972e2->enter($__internal_1e4a440a112b1c92a9125c3f8bd61eee36fd739a45bc2604c7bae27d72e972e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1e4a440a112b1c92a9125c3f8bd61eee36fd739a45bc2604c7bae27d72e972e2->leave($__internal_1e4a440a112b1c92a9125c3f8bd61eee36fd739a45bc2604c7bae27d72e972e2_prof);

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
