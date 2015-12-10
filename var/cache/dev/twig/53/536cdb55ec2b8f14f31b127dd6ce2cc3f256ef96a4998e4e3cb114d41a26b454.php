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
        $__internal_1551941af73b07cbe04854540154ae0ebdc56df87a042146949b4140d5be1e98 = $this->env->getExtension("native_profiler");
        $__internal_1551941af73b07cbe04854540154ae0ebdc56df87a042146949b4140d5be1e98->enter($__internal_1551941af73b07cbe04854540154ae0ebdc56df87a042146949b4140d5be1e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1551941af73b07cbe04854540154ae0ebdc56df87a042146949b4140d5be1e98->leave($__internal_1551941af73b07cbe04854540154ae0ebdc56df87a042146949b4140d5be1e98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_773eccdd3cc0b5183b56a71f708980e2c79fdf3898150e422ace9f725ad6ce07 = $this->env->getExtension("native_profiler");
        $__internal_773eccdd3cc0b5183b56a71f708980e2c79fdf3898150e422ace9f725ad6ce07->enter($__internal_773eccdd3cc0b5183b56a71f708980e2c79fdf3898150e422ace9f725ad6ce07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_773eccdd3cc0b5183b56a71f708980e2c79fdf3898150e422ace9f725ad6ce07->leave($__internal_773eccdd3cc0b5183b56a71f708980e2c79fdf3898150e422ace9f725ad6ce07_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_882e6120558200eb0b4af202fa3fbd01de1dd67fe6c00c6f50bdf9f97f091e8d = $this->env->getExtension("native_profiler");
        $__internal_882e6120558200eb0b4af202fa3fbd01de1dd67fe6c00c6f50bdf9f97f091e8d->enter($__internal_882e6120558200eb0b4af202fa3fbd01de1dd67fe6c00c6f50bdf9f97f091e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_882e6120558200eb0b4af202fa3fbd01de1dd67fe6c00c6f50bdf9f97f091e8d->leave($__internal_882e6120558200eb0b4af202fa3fbd01de1dd67fe6c00c6f50bdf9f97f091e8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9dc85ba966feafd6b4ca915a7c7daca1177017d5459daf9513d7bbf47650d991 = $this->env->getExtension("native_profiler");
        $__internal_9dc85ba966feafd6b4ca915a7c7daca1177017d5459daf9513d7bbf47650d991->enter($__internal_9dc85ba966feafd6b4ca915a7c7daca1177017d5459daf9513d7bbf47650d991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9dc85ba966feafd6b4ca915a7c7daca1177017d5459daf9513d7bbf47650d991->leave($__internal_9dc85ba966feafd6b4ca915a7c7daca1177017d5459daf9513d7bbf47650d991_prof);

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
