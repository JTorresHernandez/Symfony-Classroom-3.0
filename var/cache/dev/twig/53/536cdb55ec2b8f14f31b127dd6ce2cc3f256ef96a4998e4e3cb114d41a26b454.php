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
        $__internal_096e3fc3e35413b0ba179b8f8c0b1083997f369f427a82724f8926c7ab6c5fb7 = $this->env->getExtension("native_profiler");
        $__internal_096e3fc3e35413b0ba179b8f8c0b1083997f369f427a82724f8926c7ab6c5fb7->enter($__internal_096e3fc3e35413b0ba179b8f8c0b1083997f369f427a82724f8926c7ab6c5fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_096e3fc3e35413b0ba179b8f8c0b1083997f369f427a82724f8926c7ab6c5fb7->leave($__internal_096e3fc3e35413b0ba179b8f8c0b1083997f369f427a82724f8926c7ab6c5fb7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eaf3dd8ac933c1025621be3566a9fea7f791c72d6400e4cf183236f87148e4b4 = $this->env->getExtension("native_profiler");
        $__internal_eaf3dd8ac933c1025621be3566a9fea7f791c72d6400e4cf183236f87148e4b4->enter($__internal_eaf3dd8ac933c1025621be3566a9fea7f791c72d6400e4cf183236f87148e4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eaf3dd8ac933c1025621be3566a9fea7f791c72d6400e4cf183236f87148e4b4->leave($__internal_eaf3dd8ac933c1025621be3566a9fea7f791c72d6400e4cf183236f87148e4b4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47397e7b67f9b868110295dbc9f2e72341d99ebb59af0e37410080873ec32abc = $this->env->getExtension("native_profiler");
        $__internal_47397e7b67f9b868110295dbc9f2e72341d99ebb59af0e37410080873ec32abc->enter($__internal_47397e7b67f9b868110295dbc9f2e72341d99ebb59af0e37410080873ec32abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47397e7b67f9b868110295dbc9f2e72341d99ebb59af0e37410080873ec32abc->leave($__internal_47397e7b67f9b868110295dbc9f2e72341d99ebb59af0e37410080873ec32abc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29ec9ed43804544aa58475d20ea4220ff1eb4d83778eb0d67c9e0b1d27ad27ad = $this->env->getExtension("native_profiler");
        $__internal_29ec9ed43804544aa58475d20ea4220ff1eb4d83778eb0d67c9e0b1d27ad27ad->enter($__internal_29ec9ed43804544aa58475d20ea4220ff1eb4d83778eb0d67c9e0b1d27ad27ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_29ec9ed43804544aa58475d20ea4220ff1eb4d83778eb0d67c9e0b1d27ad27ad->leave($__internal_29ec9ed43804544aa58475d20ea4220ff1eb4d83778eb0d67c9e0b1d27ad27ad_prof);

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
