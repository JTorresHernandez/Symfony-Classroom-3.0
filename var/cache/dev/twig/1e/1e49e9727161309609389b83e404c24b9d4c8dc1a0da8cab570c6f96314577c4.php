<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7d08f0cf1884342d651c6ad70c2284d5d1f450a18e4cfa86310451d213a0b8f2 extends Twig_Template
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
        $__internal_4bb0736a6fe8d962f443e1d3b5d4f41bb3cc5e8f2b4a38ff256d0944d5703676 = $this->env->getExtension("native_profiler");
        $__internal_4bb0736a6fe8d962f443e1d3b5d4f41bb3cc5e8f2b4a38ff256d0944d5703676->enter($__internal_4bb0736a6fe8d962f443e1d3b5d4f41bb3cc5e8f2b4a38ff256d0944d5703676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bb0736a6fe8d962f443e1d3b5d4f41bb3cc5e8f2b4a38ff256d0944d5703676->leave($__internal_4bb0736a6fe8d962f443e1d3b5d4f41bb3cc5e8f2b4a38ff256d0944d5703676_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9befb08af152af0fc3b1087a207a62245f51661c18e1705fa733cfc52b57bc3f = $this->env->getExtension("native_profiler");
        $__internal_9befb08af152af0fc3b1087a207a62245f51661c18e1705fa733cfc52b57bc3f->enter($__internal_9befb08af152af0fc3b1087a207a62245f51661c18e1705fa733cfc52b57bc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9befb08af152af0fc3b1087a207a62245f51661c18e1705fa733cfc52b57bc3f->leave($__internal_9befb08af152af0fc3b1087a207a62245f51661c18e1705fa733cfc52b57bc3f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f27dee57cf40ce1b9a32f8f6464a9d69eaff3e3ffc3a09579a3d908901c37ec8 = $this->env->getExtension("native_profiler");
        $__internal_f27dee57cf40ce1b9a32f8f6464a9d69eaff3e3ffc3a09579a3d908901c37ec8->enter($__internal_f27dee57cf40ce1b9a32f8f6464a9d69eaff3e3ffc3a09579a3d908901c37ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f27dee57cf40ce1b9a32f8f6464a9d69eaff3e3ffc3a09579a3d908901c37ec8->leave($__internal_f27dee57cf40ce1b9a32f8f6464a9d69eaff3e3ffc3a09579a3d908901c37ec8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f794b05d72bfa61e1bfee94562e113dd8ed14d9291a9f3e88b658e3629a7553 = $this->env->getExtension("native_profiler");
        $__internal_1f794b05d72bfa61e1bfee94562e113dd8ed14d9291a9f3e88b658e3629a7553->enter($__internal_1f794b05d72bfa61e1bfee94562e113dd8ed14d9291a9f3e88b658e3629a7553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1f794b05d72bfa61e1bfee94562e113dd8ed14d9291a9f3e88b658e3629a7553->leave($__internal_1f794b05d72bfa61e1bfee94562e113dd8ed14d9291a9f3e88b658e3629a7553_prof);

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
