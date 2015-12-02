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
        $__internal_5cd674477661021d2d92482c663033407f4f1f74096632afc77ea4eb57d83e39 = $this->env->getExtension("native_profiler");
        $__internal_5cd674477661021d2d92482c663033407f4f1f74096632afc77ea4eb57d83e39->enter($__internal_5cd674477661021d2d92482c663033407f4f1f74096632afc77ea4eb57d83e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cd674477661021d2d92482c663033407f4f1f74096632afc77ea4eb57d83e39->leave($__internal_5cd674477661021d2d92482c663033407f4f1f74096632afc77ea4eb57d83e39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1226682852e8559205b4912ab05a869eac1be57a05ef3171cedaa0dd0fe596cf = $this->env->getExtension("native_profiler");
        $__internal_1226682852e8559205b4912ab05a869eac1be57a05ef3171cedaa0dd0fe596cf->enter($__internal_1226682852e8559205b4912ab05a869eac1be57a05ef3171cedaa0dd0fe596cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1226682852e8559205b4912ab05a869eac1be57a05ef3171cedaa0dd0fe596cf->leave($__internal_1226682852e8559205b4912ab05a869eac1be57a05ef3171cedaa0dd0fe596cf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_66fe9600a38e304377986e2ddc0562fffe57a34bcc8f2c3c603a939a28b9f5a6 = $this->env->getExtension("native_profiler");
        $__internal_66fe9600a38e304377986e2ddc0562fffe57a34bcc8f2c3c603a939a28b9f5a6->enter($__internal_66fe9600a38e304377986e2ddc0562fffe57a34bcc8f2c3c603a939a28b9f5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_66fe9600a38e304377986e2ddc0562fffe57a34bcc8f2c3c603a939a28b9f5a6->leave($__internal_66fe9600a38e304377986e2ddc0562fffe57a34bcc8f2c3c603a939a28b9f5a6_prof);

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
