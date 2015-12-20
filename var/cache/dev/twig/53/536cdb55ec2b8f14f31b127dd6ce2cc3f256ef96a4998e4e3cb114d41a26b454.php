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
        $__internal_2327d41007441f2d98930a94207807c1ebb5b1aff94684ae3ccb1b9355d55eeb = $this->env->getExtension("native_profiler");
        $__internal_2327d41007441f2d98930a94207807c1ebb5b1aff94684ae3ccb1b9355d55eeb->enter($__internal_2327d41007441f2d98930a94207807c1ebb5b1aff94684ae3ccb1b9355d55eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2327d41007441f2d98930a94207807c1ebb5b1aff94684ae3ccb1b9355d55eeb->leave($__internal_2327d41007441f2d98930a94207807c1ebb5b1aff94684ae3ccb1b9355d55eeb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb5a7565470c0d63789bb7fabacb84019b57fb469841ae8718099b306df34eb4 = $this->env->getExtension("native_profiler");
        $__internal_bb5a7565470c0d63789bb7fabacb84019b57fb469841ae8718099b306df34eb4->enter($__internal_bb5a7565470c0d63789bb7fabacb84019b57fb469841ae8718099b306df34eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bb5a7565470c0d63789bb7fabacb84019b57fb469841ae8718099b306df34eb4->leave($__internal_bb5a7565470c0d63789bb7fabacb84019b57fb469841ae8718099b306df34eb4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d52323cfef239d094fad16c5ba64c48a161d2cd7b7b2992d4fd1700b0f1264b = $this->env->getExtension("native_profiler");
        $__internal_2d52323cfef239d094fad16c5ba64c48a161d2cd7b7b2992d4fd1700b0f1264b->enter($__internal_2d52323cfef239d094fad16c5ba64c48a161d2cd7b7b2992d4fd1700b0f1264b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2d52323cfef239d094fad16c5ba64c48a161d2cd7b7b2992d4fd1700b0f1264b->leave($__internal_2d52323cfef239d094fad16c5ba64c48a161d2cd7b7b2992d4fd1700b0f1264b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa6e51009cc05e83e70144b9c0e988eb1f66bc7af11e9bec6d2336fff50c7fa1 = $this->env->getExtension("native_profiler");
        $__internal_fa6e51009cc05e83e70144b9c0e988eb1f66bc7af11e9bec6d2336fff50c7fa1->enter($__internal_fa6e51009cc05e83e70144b9c0e988eb1f66bc7af11e9bec6d2336fff50c7fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa6e51009cc05e83e70144b9c0e988eb1f66bc7af11e9bec6d2336fff50c7fa1->leave($__internal_fa6e51009cc05e83e70144b9c0e988eb1f66bc7af11e9bec6d2336fff50c7fa1_prof);

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
