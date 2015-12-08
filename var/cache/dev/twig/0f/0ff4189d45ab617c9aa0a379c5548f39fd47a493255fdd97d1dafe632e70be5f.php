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
        $__internal_ffb652582f80d872cc78129744f9df12d23d8dc8d8797f395523027c9d658742 = $this->env->getExtension("native_profiler");
        $__internal_ffb652582f80d872cc78129744f9df12d23d8dc8d8797f395523027c9d658742->enter($__internal_ffb652582f80d872cc78129744f9df12d23d8dc8d8797f395523027c9d658742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffb652582f80d872cc78129744f9df12d23d8dc8d8797f395523027c9d658742->leave($__internal_ffb652582f80d872cc78129744f9df12d23d8dc8d8797f395523027c9d658742_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_43752800ed36ec2ab77497fc4768c9f3a78658f0027355f6f6ea0ee64fced0b5 = $this->env->getExtension("native_profiler");
        $__internal_43752800ed36ec2ab77497fc4768c9f3a78658f0027355f6f6ea0ee64fced0b5->enter($__internal_43752800ed36ec2ab77497fc4768c9f3a78658f0027355f6f6ea0ee64fced0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_43752800ed36ec2ab77497fc4768c9f3a78658f0027355f6f6ea0ee64fced0b5->leave($__internal_43752800ed36ec2ab77497fc4768c9f3a78658f0027355f6f6ea0ee64fced0b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_736ac9f280ad80b2f51305ad90d15d2a6764fd12b661238e0a0e8e725ec8ca2b = $this->env->getExtension("native_profiler");
        $__internal_736ac9f280ad80b2f51305ad90d15d2a6764fd12b661238e0a0e8e725ec8ca2b->enter($__internal_736ac9f280ad80b2f51305ad90d15d2a6764fd12b661238e0a0e8e725ec8ca2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_736ac9f280ad80b2f51305ad90d15d2a6764fd12b661238e0a0e8e725ec8ca2b->leave($__internal_736ac9f280ad80b2f51305ad90d15d2a6764fd12b661238e0a0e8e725ec8ca2b_prof);

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
