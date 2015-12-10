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
        $__internal_24277c6715dca784e3692cac79cd5d3284e0a64cdea34168811fe173b7094aa9 = $this->env->getExtension("native_profiler");
        $__internal_24277c6715dca784e3692cac79cd5d3284e0a64cdea34168811fe173b7094aa9->enter($__internal_24277c6715dca784e3692cac79cd5d3284e0a64cdea34168811fe173b7094aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24277c6715dca784e3692cac79cd5d3284e0a64cdea34168811fe173b7094aa9->leave($__internal_24277c6715dca784e3692cac79cd5d3284e0a64cdea34168811fe173b7094aa9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a48535b7023f9f52fd67349847adcd371b1214ffbb5dbc4e84329781775017f = $this->env->getExtension("native_profiler");
        $__internal_6a48535b7023f9f52fd67349847adcd371b1214ffbb5dbc4e84329781775017f->enter($__internal_6a48535b7023f9f52fd67349847adcd371b1214ffbb5dbc4e84329781775017f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6a48535b7023f9f52fd67349847adcd371b1214ffbb5dbc4e84329781775017f->leave($__internal_6a48535b7023f9f52fd67349847adcd371b1214ffbb5dbc4e84329781775017f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_86c13790c958dac91acdea12b034a3fdfc9e76932c6f0fe2f2b517b221297aee = $this->env->getExtension("native_profiler");
        $__internal_86c13790c958dac91acdea12b034a3fdfc9e76932c6f0fe2f2b517b221297aee->enter($__internal_86c13790c958dac91acdea12b034a3fdfc9e76932c6f0fe2f2b517b221297aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_86c13790c958dac91acdea12b034a3fdfc9e76932c6f0fe2f2b517b221297aee->leave($__internal_86c13790c958dac91acdea12b034a3fdfc9e76932c6f0fe2f2b517b221297aee_prof);

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
