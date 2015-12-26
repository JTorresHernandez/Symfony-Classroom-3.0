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
        $__internal_9b2dc6e88110727a1699535e0244ba6dc8ea1eb3772f8b63aa22e9db49b51313 = $this->env->getExtension("native_profiler");
        $__internal_9b2dc6e88110727a1699535e0244ba6dc8ea1eb3772f8b63aa22e9db49b51313->enter($__internal_9b2dc6e88110727a1699535e0244ba6dc8ea1eb3772f8b63aa22e9db49b51313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b2dc6e88110727a1699535e0244ba6dc8ea1eb3772f8b63aa22e9db49b51313->leave($__internal_9b2dc6e88110727a1699535e0244ba6dc8ea1eb3772f8b63aa22e9db49b51313_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_467abb0213dd1a217c73339768684d18583021e9cf6e838d56002adcea123130 = $this->env->getExtension("native_profiler");
        $__internal_467abb0213dd1a217c73339768684d18583021e9cf6e838d56002adcea123130->enter($__internal_467abb0213dd1a217c73339768684d18583021e9cf6e838d56002adcea123130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_467abb0213dd1a217c73339768684d18583021e9cf6e838d56002adcea123130->leave($__internal_467abb0213dd1a217c73339768684d18583021e9cf6e838d56002adcea123130_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da063ae520633cb19134a93656d857b8fdf91c043f3dbeafa62ffee9e43fdef3 = $this->env->getExtension("native_profiler");
        $__internal_da063ae520633cb19134a93656d857b8fdf91c043f3dbeafa62ffee9e43fdef3->enter($__internal_da063ae520633cb19134a93656d857b8fdf91c043f3dbeafa62ffee9e43fdef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da063ae520633cb19134a93656d857b8fdf91c043f3dbeafa62ffee9e43fdef3->leave($__internal_da063ae520633cb19134a93656d857b8fdf91c043f3dbeafa62ffee9e43fdef3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ec81ee23a98404d0e1109a52418e018530403c3e6f4eb3594a91eb68f97087d = $this->env->getExtension("native_profiler");
        $__internal_0ec81ee23a98404d0e1109a52418e018530403c3e6f4eb3594a91eb68f97087d->enter($__internal_0ec81ee23a98404d0e1109a52418e018530403c3e6f4eb3594a91eb68f97087d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ec81ee23a98404d0e1109a52418e018530403c3e6f4eb3594a91eb68f97087d->leave($__internal_0ec81ee23a98404d0e1109a52418e018530403c3e6f4eb3594a91eb68f97087d_prof);

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
