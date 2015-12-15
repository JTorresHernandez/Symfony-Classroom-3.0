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
        $__internal_277ba565e052df55f9abf389665a743c6e6577db78f95a8af950bc1720dce85e = $this->env->getExtension("native_profiler");
        $__internal_277ba565e052df55f9abf389665a743c6e6577db78f95a8af950bc1720dce85e->enter($__internal_277ba565e052df55f9abf389665a743c6e6577db78f95a8af950bc1720dce85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_277ba565e052df55f9abf389665a743c6e6577db78f95a8af950bc1720dce85e->leave($__internal_277ba565e052df55f9abf389665a743c6e6577db78f95a8af950bc1720dce85e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b14d2be135c3dcd91450e96294a0b387bcb84ed8fdb1c3fa4484a9a1a2e37ac = $this->env->getExtension("native_profiler");
        $__internal_8b14d2be135c3dcd91450e96294a0b387bcb84ed8fdb1c3fa4484a9a1a2e37ac->enter($__internal_8b14d2be135c3dcd91450e96294a0b387bcb84ed8fdb1c3fa4484a9a1a2e37ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8b14d2be135c3dcd91450e96294a0b387bcb84ed8fdb1c3fa4484a9a1a2e37ac->leave($__internal_8b14d2be135c3dcd91450e96294a0b387bcb84ed8fdb1c3fa4484a9a1a2e37ac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_117b8babd4138ce9645b86e51f7662b142c84f993d7a60dc43f4ac4da73960e8 = $this->env->getExtension("native_profiler");
        $__internal_117b8babd4138ce9645b86e51f7662b142c84f993d7a60dc43f4ac4da73960e8->enter($__internal_117b8babd4138ce9645b86e51f7662b142c84f993d7a60dc43f4ac4da73960e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_117b8babd4138ce9645b86e51f7662b142c84f993d7a60dc43f4ac4da73960e8->leave($__internal_117b8babd4138ce9645b86e51f7662b142c84f993d7a60dc43f4ac4da73960e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebbc301c67dad7b798242e2b9b86ae3171226fc47a4e6f65e36a3270dceafc2c = $this->env->getExtension("native_profiler");
        $__internal_ebbc301c67dad7b798242e2b9b86ae3171226fc47a4e6f65e36a3270dceafc2c->enter($__internal_ebbc301c67dad7b798242e2b9b86ae3171226fc47a4e6f65e36a3270dceafc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ebbc301c67dad7b798242e2b9b86ae3171226fc47a4e6f65e36a3270dceafc2c->leave($__internal_ebbc301c67dad7b798242e2b9b86ae3171226fc47a4e6f65e36a3270dceafc2c_prof);

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
