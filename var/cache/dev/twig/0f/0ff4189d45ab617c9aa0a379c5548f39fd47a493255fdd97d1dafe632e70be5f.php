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
        $__internal_b670f615783ea8f9b511eedca3d9ce29f5550b4d8afd6f56de731912ba693550 = $this->env->getExtension("native_profiler");
        $__internal_b670f615783ea8f9b511eedca3d9ce29f5550b4d8afd6f56de731912ba693550->enter($__internal_b670f615783ea8f9b511eedca3d9ce29f5550b4d8afd6f56de731912ba693550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b670f615783ea8f9b511eedca3d9ce29f5550b4d8afd6f56de731912ba693550->leave($__internal_b670f615783ea8f9b511eedca3d9ce29f5550b4d8afd6f56de731912ba693550_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf6d69e6bec6c49e4992a11e46da826552139acfab94fdbebeb116a52a4604b4 = $this->env->getExtension("native_profiler");
        $__internal_cf6d69e6bec6c49e4992a11e46da826552139acfab94fdbebeb116a52a4604b4->enter($__internal_cf6d69e6bec6c49e4992a11e46da826552139acfab94fdbebeb116a52a4604b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cf6d69e6bec6c49e4992a11e46da826552139acfab94fdbebeb116a52a4604b4->leave($__internal_cf6d69e6bec6c49e4992a11e46da826552139acfab94fdbebeb116a52a4604b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f88c38dd9d6236771b753be1a6db82f47fd9927c74fa50c4c760c6f9b3358ce0 = $this->env->getExtension("native_profiler");
        $__internal_f88c38dd9d6236771b753be1a6db82f47fd9927c74fa50c4c760c6f9b3358ce0->enter($__internal_f88c38dd9d6236771b753be1a6db82f47fd9927c74fa50c4c760c6f9b3358ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f88c38dd9d6236771b753be1a6db82f47fd9927c74fa50c4c760c6f9b3358ce0->leave($__internal_f88c38dd9d6236771b753be1a6db82f47fd9927c74fa50c4c760c6f9b3358ce0_prof);

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
