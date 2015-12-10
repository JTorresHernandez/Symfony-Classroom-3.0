<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8bec3f81b3c01c9a585628ed69d1b665fd814e2628fbd124a6287618684fcdbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ecef937219fa45f3a318baf1d41cec888495855acf82b6f8ffabd45ab567c932 = $this->env->getExtension("native_profiler");
        $__internal_ecef937219fa45f3a318baf1d41cec888495855acf82b6f8ffabd45ab567c932->enter($__internal_ecef937219fa45f3a318baf1d41cec888495855acf82b6f8ffabd45ab567c932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecef937219fa45f3a318baf1d41cec888495855acf82b6f8ffabd45ab567c932->leave($__internal_ecef937219fa45f3a318baf1d41cec888495855acf82b6f8ffabd45ab567c932_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39c1d04020ea715efcb5aeddc794e9a376b683c46d5f2b8c79543c2b663cdf48 = $this->env->getExtension("native_profiler");
        $__internal_39c1d04020ea715efcb5aeddc794e9a376b683c46d5f2b8c79543c2b663cdf48->enter($__internal_39c1d04020ea715efcb5aeddc794e9a376b683c46d5f2b8c79543c2b663cdf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39c1d04020ea715efcb5aeddc794e9a376b683c46d5f2b8c79543c2b663cdf48->leave($__internal_39c1d04020ea715efcb5aeddc794e9a376b683c46d5f2b8c79543c2b663cdf48_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8edebd06a475372d05122c277ee6f13d5a93a48802ac5f8fe77a93b54becb0ee = $this->env->getExtension("native_profiler");
        $__internal_8edebd06a475372d05122c277ee6f13d5a93a48802ac5f8fe77a93b54becb0ee->enter($__internal_8edebd06a475372d05122c277ee6f13d5a93a48802ac5f8fe77a93b54becb0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8edebd06a475372d05122c277ee6f13d5a93a48802ac5f8fe77a93b54becb0ee->leave($__internal_8edebd06a475372d05122c277ee6f13d5a93a48802ac5f8fe77a93b54becb0ee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_698d504cd5e4bdeffc880d022e86dd267e0f9d6b252dba6b9fda7a992d5973ee = $this->env->getExtension("native_profiler");
        $__internal_698d504cd5e4bdeffc880d022e86dd267e0f9d6b252dba6b9fda7a992d5973ee->enter($__internal_698d504cd5e4bdeffc880d022e86dd267e0f9d6b252dba6b9fda7a992d5973ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_698d504cd5e4bdeffc880d022e86dd267e0f9d6b252dba6b9fda7a992d5973ee->leave($__internal_698d504cd5e4bdeffc880d022e86dd267e0f9d6b252dba6b9fda7a992d5973ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
