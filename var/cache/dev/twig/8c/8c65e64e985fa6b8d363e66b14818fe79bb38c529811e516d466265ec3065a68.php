<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d974e029a2fa0d75a79af04b5abb1b71425f50bc485d715af6141f9c726ad50e extends Twig_Template
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
        $__internal_33700ec9b854cfe7f323964d2f058746f3c494fec1439a8afdb460053c347fe0 = $this->env->getExtension("native_profiler");
        $__internal_33700ec9b854cfe7f323964d2f058746f3c494fec1439a8afdb460053c347fe0->enter($__internal_33700ec9b854cfe7f323964d2f058746f3c494fec1439a8afdb460053c347fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33700ec9b854cfe7f323964d2f058746f3c494fec1439a8afdb460053c347fe0->leave($__internal_33700ec9b854cfe7f323964d2f058746f3c494fec1439a8afdb460053c347fe0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74ba3e7293255acb3b7fa8b61ac3384a7127d8c899995195a285d6f4454a28d0 = $this->env->getExtension("native_profiler");
        $__internal_74ba3e7293255acb3b7fa8b61ac3384a7127d8c899995195a285d6f4454a28d0->enter($__internal_74ba3e7293255acb3b7fa8b61ac3384a7127d8c899995195a285d6f4454a28d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_74ba3e7293255acb3b7fa8b61ac3384a7127d8c899995195a285d6f4454a28d0->leave($__internal_74ba3e7293255acb3b7fa8b61ac3384a7127d8c899995195a285d6f4454a28d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb29fc4d307205d1a347327df4cac58e52677b9f343a41c3b1f9bda6f10370b0 = $this->env->getExtension("native_profiler");
        $__internal_cb29fc4d307205d1a347327df4cac58e52677b9f343a41c3b1f9bda6f10370b0->enter($__internal_cb29fc4d307205d1a347327df4cac58e52677b9f343a41c3b1f9bda6f10370b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb29fc4d307205d1a347327df4cac58e52677b9f343a41c3b1f9bda6f10370b0->leave($__internal_cb29fc4d307205d1a347327df4cac58e52677b9f343a41c3b1f9bda6f10370b0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b08ea36f7cd488be89e16da4c737c3ceb8a0c93e16b16ce5e7479ecb78796ab2 = $this->env->getExtension("native_profiler");
        $__internal_b08ea36f7cd488be89e16da4c737c3ceb8a0c93e16b16ce5e7479ecb78796ab2->enter($__internal_b08ea36f7cd488be89e16da4c737c3ceb8a0c93e16b16ce5e7479ecb78796ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b08ea36f7cd488be89e16da4c737c3ceb8a0c93e16b16ce5e7479ecb78796ab2->leave($__internal_b08ea36f7cd488be89e16da4c737c3ceb8a0c93e16b16ce5e7479ecb78796ab2_prof);

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
