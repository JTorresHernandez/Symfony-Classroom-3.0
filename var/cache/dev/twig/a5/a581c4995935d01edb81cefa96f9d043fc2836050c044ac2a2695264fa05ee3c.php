<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b9b7d6fc30e373121ad269a7c6a55be152866d891ee5db98ebf3d8554d908555 extends Twig_Template
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
        $__internal_d3c9c71c9920339634b19fbd8e86938fb6ba0171f0b84d72121cb7be8c629345 = $this->env->getExtension("native_profiler");
        $__internal_d3c9c71c9920339634b19fbd8e86938fb6ba0171f0b84d72121cb7be8c629345->enter($__internal_d3c9c71c9920339634b19fbd8e86938fb6ba0171f0b84d72121cb7be8c629345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3c9c71c9920339634b19fbd8e86938fb6ba0171f0b84d72121cb7be8c629345->leave($__internal_d3c9c71c9920339634b19fbd8e86938fb6ba0171f0b84d72121cb7be8c629345_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_806e31ace76408ce0bda035adb4e97d5d1a1f648192b469eb3c57305134322fd = $this->env->getExtension("native_profiler");
        $__internal_806e31ace76408ce0bda035adb4e97d5d1a1f648192b469eb3c57305134322fd->enter($__internal_806e31ace76408ce0bda035adb4e97d5d1a1f648192b469eb3c57305134322fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_806e31ace76408ce0bda035adb4e97d5d1a1f648192b469eb3c57305134322fd->leave($__internal_806e31ace76408ce0bda035adb4e97d5d1a1f648192b469eb3c57305134322fd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9213524c20e239bb363ed24835a8806ee95d507766bde55e186a09fb2e3966be = $this->env->getExtension("native_profiler");
        $__internal_9213524c20e239bb363ed24835a8806ee95d507766bde55e186a09fb2e3966be->enter($__internal_9213524c20e239bb363ed24835a8806ee95d507766bde55e186a09fb2e3966be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9213524c20e239bb363ed24835a8806ee95d507766bde55e186a09fb2e3966be->leave($__internal_9213524c20e239bb363ed24835a8806ee95d507766bde55e186a09fb2e3966be_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f157ee6286a603203c740be7d9a69a9d8e6f1dd5c4493882a8e178d7d45c6dc = $this->env->getExtension("native_profiler");
        $__internal_0f157ee6286a603203c740be7d9a69a9d8e6f1dd5c4493882a8e178d7d45c6dc->enter($__internal_0f157ee6286a603203c740be7d9a69a9d8e6f1dd5c4493882a8e178d7d45c6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0f157ee6286a603203c740be7d9a69a9d8e6f1dd5c4493882a8e178d7d45c6dc->leave($__internal_0f157ee6286a603203c740be7d9a69a9d8e6f1dd5c4493882a8e178d7d45c6dc_prof);

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
