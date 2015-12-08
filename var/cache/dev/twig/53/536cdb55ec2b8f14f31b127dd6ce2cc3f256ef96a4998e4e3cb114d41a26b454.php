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
        $__internal_7d0fe13dac8e3b902a6ac61891538ef47a9d93c3ba502c947ea588394ae34f43 = $this->env->getExtension("native_profiler");
        $__internal_7d0fe13dac8e3b902a6ac61891538ef47a9d93c3ba502c947ea588394ae34f43->enter($__internal_7d0fe13dac8e3b902a6ac61891538ef47a9d93c3ba502c947ea588394ae34f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d0fe13dac8e3b902a6ac61891538ef47a9d93c3ba502c947ea588394ae34f43->leave($__internal_7d0fe13dac8e3b902a6ac61891538ef47a9d93c3ba502c947ea588394ae34f43_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8fc6318d2e36323d31dffc1d20cc407063ce272aa8671b9a9c2fa6eaf3281cc = $this->env->getExtension("native_profiler");
        $__internal_d8fc6318d2e36323d31dffc1d20cc407063ce272aa8671b9a9c2fa6eaf3281cc->enter($__internal_d8fc6318d2e36323d31dffc1d20cc407063ce272aa8671b9a9c2fa6eaf3281cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8fc6318d2e36323d31dffc1d20cc407063ce272aa8671b9a9c2fa6eaf3281cc->leave($__internal_d8fc6318d2e36323d31dffc1d20cc407063ce272aa8671b9a9c2fa6eaf3281cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b74e80876ac95cde06aaa0f9a93bce0a7f56fda418b0fc43d6dfba2eeb61fdbc = $this->env->getExtension("native_profiler");
        $__internal_b74e80876ac95cde06aaa0f9a93bce0a7f56fda418b0fc43d6dfba2eeb61fdbc->enter($__internal_b74e80876ac95cde06aaa0f9a93bce0a7f56fda418b0fc43d6dfba2eeb61fdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b74e80876ac95cde06aaa0f9a93bce0a7f56fda418b0fc43d6dfba2eeb61fdbc->leave($__internal_b74e80876ac95cde06aaa0f9a93bce0a7f56fda418b0fc43d6dfba2eeb61fdbc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee597d8d9fa695be7f8e290b69a5e23d72d69d9470d157f8f121a1eda4c5fe5a = $this->env->getExtension("native_profiler");
        $__internal_ee597d8d9fa695be7f8e290b69a5e23d72d69d9470d157f8f121a1eda4c5fe5a->enter($__internal_ee597d8d9fa695be7f8e290b69a5e23d72d69d9470d157f8f121a1eda4c5fe5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee597d8d9fa695be7f8e290b69a5e23d72d69d9470d157f8f121a1eda4c5fe5a->leave($__internal_ee597d8d9fa695be7f8e290b69a5e23d72d69d9470d157f8f121a1eda4c5fe5a_prof);

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
