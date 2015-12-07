<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_727336a30dfb3bfe92defd438dd2a6c0626aff0fa42f0697778bd49a0640c83c extends Twig_Template
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
        $__internal_e748a7d0cd23869fab7b22f7d61818852afb103d0b3258bd717337664a7f2de6 = $this->env->getExtension("native_profiler");
        $__internal_e748a7d0cd23869fab7b22f7d61818852afb103d0b3258bd717337664a7f2de6->enter($__internal_e748a7d0cd23869fab7b22f7d61818852afb103d0b3258bd717337664a7f2de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e748a7d0cd23869fab7b22f7d61818852afb103d0b3258bd717337664a7f2de6->leave($__internal_e748a7d0cd23869fab7b22f7d61818852afb103d0b3258bd717337664a7f2de6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d0a7f20d2e40749160333354eed31d4551b50716d9c11cd210b95126a6f677a = $this->env->getExtension("native_profiler");
        $__internal_1d0a7f20d2e40749160333354eed31d4551b50716d9c11cd210b95126a6f677a->enter($__internal_1d0a7f20d2e40749160333354eed31d4551b50716d9c11cd210b95126a6f677a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1d0a7f20d2e40749160333354eed31d4551b50716d9c11cd210b95126a6f677a->leave($__internal_1d0a7f20d2e40749160333354eed31d4551b50716d9c11cd210b95126a6f677a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71f9fabd5910e4a20801a54248921334df45908c27c8431255b4b997e6b72492 = $this->env->getExtension("native_profiler");
        $__internal_71f9fabd5910e4a20801a54248921334df45908c27c8431255b4b997e6b72492->enter($__internal_71f9fabd5910e4a20801a54248921334df45908c27c8431255b4b997e6b72492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71f9fabd5910e4a20801a54248921334df45908c27c8431255b4b997e6b72492->leave($__internal_71f9fabd5910e4a20801a54248921334df45908c27c8431255b4b997e6b72492_prof);

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
