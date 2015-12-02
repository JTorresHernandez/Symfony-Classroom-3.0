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
        $__internal_8c908dfeca98eeaadd6cccc04861bccd9876858b1d5f87fcf9bcaeb6fb90f5ae = $this->env->getExtension("native_profiler");
        $__internal_8c908dfeca98eeaadd6cccc04861bccd9876858b1d5f87fcf9bcaeb6fb90f5ae->enter($__internal_8c908dfeca98eeaadd6cccc04861bccd9876858b1d5f87fcf9bcaeb6fb90f5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c908dfeca98eeaadd6cccc04861bccd9876858b1d5f87fcf9bcaeb6fb90f5ae->leave($__internal_8c908dfeca98eeaadd6cccc04861bccd9876858b1d5f87fcf9bcaeb6fb90f5ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79e5ae60c0ce507a12fc4037bd6b9971d4d0170474227ea5dcf697bbb31f2653 = $this->env->getExtension("native_profiler");
        $__internal_79e5ae60c0ce507a12fc4037bd6b9971d4d0170474227ea5dcf697bbb31f2653->enter($__internal_79e5ae60c0ce507a12fc4037bd6b9971d4d0170474227ea5dcf697bbb31f2653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_79e5ae60c0ce507a12fc4037bd6b9971d4d0170474227ea5dcf697bbb31f2653->leave($__internal_79e5ae60c0ce507a12fc4037bd6b9971d4d0170474227ea5dcf697bbb31f2653_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77e719cfe7f3fbd9914dd0bcdde58e76b322569ae3b9d079f70087e541a6b8d8 = $this->env->getExtension("native_profiler");
        $__internal_77e719cfe7f3fbd9914dd0bcdde58e76b322569ae3b9d079f70087e541a6b8d8->enter($__internal_77e719cfe7f3fbd9914dd0bcdde58e76b322569ae3b9d079f70087e541a6b8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77e719cfe7f3fbd9914dd0bcdde58e76b322569ae3b9d079f70087e541a6b8d8->leave($__internal_77e719cfe7f3fbd9914dd0bcdde58e76b322569ae3b9d079f70087e541a6b8d8_prof);

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
