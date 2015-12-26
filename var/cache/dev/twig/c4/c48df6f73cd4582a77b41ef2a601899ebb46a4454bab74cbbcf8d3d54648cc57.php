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
        $__internal_44c855d64aee2bf4ab45dd33b2a80ccff0347122b205c1723ce51f36512d7ad4 = $this->env->getExtension("native_profiler");
        $__internal_44c855d64aee2bf4ab45dd33b2a80ccff0347122b205c1723ce51f36512d7ad4->enter($__internal_44c855d64aee2bf4ab45dd33b2a80ccff0347122b205c1723ce51f36512d7ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44c855d64aee2bf4ab45dd33b2a80ccff0347122b205c1723ce51f36512d7ad4->leave($__internal_44c855d64aee2bf4ab45dd33b2a80ccff0347122b205c1723ce51f36512d7ad4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89ebfd8c0e66d73f287592e39b10650754016f0e2f18734e3eb988ec0f2821c8 = $this->env->getExtension("native_profiler");
        $__internal_89ebfd8c0e66d73f287592e39b10650754016f0e2f18734e3eb988ec0f2821c8->enter($__internal_89ebfd8c0e66d73f287592e39b10650754016f0e2f18734e3eb988ec0f2821c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_89ebfd8c0e66d73f287592e39b10650754016f0e2f18734e3eb988ec0f2821c8->leave($__internal_89ebfd8c0e66d73f287592e39b10650754016f0e2f18734e3eb988ec0f2821c8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fc6cd0293695334c27a5693e918eb4a4f789fe74fc75faffc78f760b576ed8b = $this->env->getExtension("native_profiler");
        $__internal_1fc6cd0293695334c27a5693e918eb4a4f789fe74fc75faffc78f760b576ed8b->enter($__internal_1fc6cd0293695334c27a5693e918eb4a4f789fe74fc75faffc78f760b576ed8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1fc6cd0293695334c27a5693e918eb4a4f789fe74fc75faffc78f760b576ed8b->leave($__internal_1fc6cd0293695334c27a5693e918eb4a4f789fe74fc75faffc78f760b576ed8b_prof);

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
