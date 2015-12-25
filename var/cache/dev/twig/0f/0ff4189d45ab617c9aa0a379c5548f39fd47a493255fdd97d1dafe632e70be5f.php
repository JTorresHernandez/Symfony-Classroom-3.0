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
        $__internal_9bdbeb3ffc5e883d4b941065754d295329fe99ffe93bca4f20a4b19981768c2a = $this->env->getExtension("native_profiler");
        $__internal_9bdbeb3ffc5e883d4b941065754d295329fe99ffe93bca4f20a4b19981768c2a->enter($__internal_9bdbeb3ffc5e883d4b941065754d295329fe99ffe93bca4f20a4b19981768c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bdbeb3ffc5e883d4b941065754d295329fe99ffe93bca4f20a4b19981768c2a->leave($__internal_9bdbeb3ffc5e883d4b941065754d295329fe99ffe93bca4f20a4b19981768c2a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80ae66fcb46bab67a0148e55c875acdfeee2f631a69e535c39be10043a1ff46e = $this->env->getExtension("native_profiler");
        $__internal_80ae66fcb46bab67a0148e55c875acdfeee2f631a69e535c39be10043a1ff46e->enter($__internal_80ae66fcb46bab67a0148e55c875acdfeee2f631a69e535c39be10043a1ff46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_80ae66fcb46bab67a0148e55c875acdfeee2f631a69e535c39be10043a1ff46e->leave($__internal_80ae66fcb46bab67a0148e55c875acdfeee2f631a69e535c39be10043a1ff46e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f65dbd21b9df790de3b673d3c6d30a8258d893344d537d2e7bc069184967704 = $this->env->getExtension("native_profiler");
        $__internal_7f65dbd21b9df790de3b673d3c6d30a8258d893344d537d2e7bc069184967704->enter($__internal_7f65dbd21b9df790de3b673d3c6d30a8258d893344d537d2e7bc069184967704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f65dbd21b9df790de3b673d3c6d30a8258d893344d537d2e7bc069184967704->leave($__internal_7f65dbd21b9df790de3b673d3c6d30a8258d893344d537d2e7bc069184967704_prof);

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
