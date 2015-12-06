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
        $__internal_6838914f248e9d80769e306ea7a07412102811fd374720555191a159d2d17a4e = $this->env->getExtension("native_profiler");
        $__internal_6838914f248e9d80769e306ea7a07412102811fd374720555191a159d2d17a4e->enter($__internal_6838914f248e9d80769e306ea7a07412102811fd374720555191a159d2d17a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6838914f248e9d80769e306ea7a07412102811fd374720555191a159d2d17a4e->leave($__internal_6838914f248e9d80769e306ea7a07412102811fd374720555191a159d2d17a4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8ee76156fa370210c6343bcaea434297a46fb23a13d6913ea49e3105dcdfb13 = $this->env->getExtension("native_profiler");
        $__internal_d8ee76156fa370210c6343bcaea434297a46fb23a13d6913ea49e3105dcdfb13->enter($__internal_d8ee76156fa370210c6343bcaea434297a46fb23a13d6913ea49e3105dcdfb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d8ee76156fa370210c6343bcaea434297a46fb23a13d6913ea49e3105dcdfb13->leave($__internal_d8ee76156fa370210c6343bcaea434297a46fb23a13d6913ea49e3105dcdfb13_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_744939ae52b2ee392108bd856b9f34ca93fcb158465b68a77b561b52d1852924 = $this->env->getExtension("native_profiler");
        $__internal_744939ae52b2ee392108bd856b9f34ca93fcb158465b68a77b561b52d1852924->enter($__internal_744939ae52b2ee392108bd856b9f34ca93fcb158465b68a77b561b52d1852924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_744939ae52b2ee392108bd856b9f34ca93fcb158465b68a77b561b52d1852924->leave($__internal_744939ae52b2ee392108bd856b9f34ca93fcb158465b68a77b561b52d1852924_prof);

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
