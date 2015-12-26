<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_624b51953a0fefdcea3ae71947e4c5996d43c8e86e58f42cc58d220fb0dbc70a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0853803ff8141939a34abb2b4d8d0c525ab523d00653c348a907c395be712acb = $this->env->getExtension("native_profiler");
        $__internal_0853803ff8141939a34abb2b4d8d0c525ab523d00653c348a907c395be712acb->enter($__internal_0853803ff8141939a34abb2b4d8d0c525ab523d00653c348a907c395be712acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0853803ff8141939a34abb2b4d8d0c525ab523d00653c348a907c395be712acb->leave($__internal_0853803ff8141939a34abb2b4d8d0c525ab523d00653c348a907c395be712acb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cfaf326782e80a916a0291d9ddf1a692f614ef0fc7a15a311064c1a9b7a16f99 = $this->env->getExtension("native_profiler");
        $__internal_cfaf326782e80a916a0291d9ddf1a692f614ef0fc7a15a311064c1a9b7a16f99->enter($__internal_cfaf326782e80a916a0291d9ddf1a692f614ef0fc7a15a311064c1a9b7a16f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cfaf326782e80a916a0291d9ddf1a692f614ef0fc7a15a311064c1a9b7a16f99->leave($__internal_cfaf326782e80a916a0291d9ddf1a692f614ef0fc7a15a311064c1a9b7a16f99_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73857dff1cade0952834a83e26d187762ffb84b455c53764d23f8b3465a45a3f = $this->env->getExtension("native_profiler");
        $__internal_73857dff1cade0952834a83e26d187762ffb84b455c53764d23f8b3465a45a3f->enter($__internal_73857dff1cade0952834a83e26d187762ffb84b455c53764d23f8b3465a45a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_73857dff1cade0952834a83e26d187762ffb84b455c53764d23f8b3465a45a3f->leave($__internal_73857dff1cade0952834a83e26d187762ffb84b455c53764d23f8b3465a45a3f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53b793dc9622f69d837319c808c50aba05f7fb91bc8106ee55f207695b8f6ef1 = $this->env->getExtension("native_profiler");
        $__internal_53b793dc9622f69d837319c808c50aba05f7fb91bc8106ee55f207695b8f6ef1->enter($__internal_53b793dc9622f69d837319c808c50aba05f7fb91bc8106ee55f207695b8f6ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_53b793dc9622f69d837319c808c50aba05f7fb91bc8106ee55f207695b8f6ef1->leave($__internal_53b793dc9622f69d837319c808c50aba05f7fb91bc8106ee55f207695b8f6ef1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
