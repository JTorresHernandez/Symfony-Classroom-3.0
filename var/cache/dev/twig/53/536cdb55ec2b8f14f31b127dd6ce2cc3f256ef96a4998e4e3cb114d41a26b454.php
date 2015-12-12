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
        $__internal_53b1debeafc9f46d53d95c8c1980398c85c0a3bbec3f15d7cd0299bd1817cf6f = $this->env->getExtension("native_profiler");
        $__internal_53b1debeafc9f46d53d95c8c1980398c85c0a3bbec3f15d7cd0299bd1817cf6f->enter($__internal_53b1debeafc9f46d53d95c8c1980398c85c0a3bbec3f15d7cd0299bd1817cf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53b1debeafc9f46d53d95c8c1980398c85c0a3bbec3f15d7cd0299bd1817cf6f->leave($__internal_53b1debeafc9f46d53d95c8c1980398c85c0a3bbec3f15d7cd0299bd1817cf6f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f40eedc4a3272544b3680c6fd9438b1eaf24cd669f29297fce43c5e49502d2c = $this->env->getExtension("native_profiler");
        $__internal_6f40eedc4a3272544b3680c6fd9438b1eaf24cd669f29297fce43c5e49502d2c->enter($__internal_6f40eedc4a3272544b3680c6fd9438b1eaf24cd669f29297fce43c5e49502d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f40eedc4a3272544b3680c6fd9438b1eaf24cd669f29297fce43c5e49502d2c->leave($__internal_6f40eedc4a3272544b3680c6fd9438b1eaf24cd669f29297fce43c5e49502d2c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b33008980a2fe6e63321dd81f68836cce1524e6454d7fc597ea9c57d0465ac8d = $this->env->getExtension("native_profiler");
        $__internal_b33008980a2fe6e63321dd81f68836cce1524e6454d7fc597ea9c57d0465ac8d->enter($__internal_b33008980a2fe6e63321dd81f68836cce1524e6454d7fc597ea9c57d0465ac8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b33008980a2fe6e63321dd81f68836cce1524e6454d7fc597ea9c57d0465ac8d->leave($__internal_b33008980a2fe6e63321dd81f68836cce1524e6454d7fc597ea9c57d0465ac8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1f82b0a901ba8e3fae2d1301794719ab0dd7741264f05afedb0098223621f5e = $this->env->getExtension("native_profiler");
        $__internal_c1f82b0a901ba8e3fae2d1301794719ab0dd7741264f05afedb0098223621f5e->enter($__internal_c1f82b0a901ba8e3fae2d1301794719ab0dd7741264f05afedb0098223621f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c1f82b0a901ba8e3fae2d1301794719ab0dd7741264f05afedb0098223621f5e->leave($__internal_c1f82b0a901ba8e3fae2d1301794719ab0dd7741264f05afedb0098223621f5e_prof);

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
