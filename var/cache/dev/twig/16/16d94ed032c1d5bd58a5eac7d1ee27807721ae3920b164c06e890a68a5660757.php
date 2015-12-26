<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d4319be359a854ef45017d46bd283a9ddbf8687a0cfdb7f7ca22b4acc497cded extends Twig_Template
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
        $__internal_56004cb7128d20a08e0192495a61d03183f32a3834d37079b4c09ab0c01b8ad9 = $this->env->getExtension("native_profiler");
        $__internal_56004cb7128d20a08e0192495a61d03183f32a3834d37079b4c09ab0c01b8ad9->enter($__internal_56004cb7128d20a08e0192495a61d03183f32a3834d37079b4c09ab0c01b8ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56004cb7128d20a08e0192495a61d03183f32a3834d37079b4c09ab0c01b8ad9->leave($__internal_56004cb7128d20a08e0192495a61d03183f32a3834d37079b4c09ab0c01b8ad9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39bc063fa554a9c7961c10df4cbe41085f69722690de0c769732de9154264a39 = $this->env->getExtension("native_profiler");
        $__internal_39bc063fa554a9c7961c10df4cbe41085f69722690de0c769732de9154264a39->enter($__internal_39bc063fa554a9c7961c10df4cbe41085f69722690de0c769732de9154264a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39bc063fa554a9c7961c10df4cbe41085f69722690de0c769732de9154264a39->leave($__internal_39bc063fa554a9c7961c10df4cbe41085f69722690de0c769732de9154264a39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ea1c5afd7a5292caf46e3a89a6b8afc30a01b0e9a58b788a4745c44bb040023 = $this->env->getExtension("native_profiler");
        $__internal_2ea1c5afd7a5292caf46e3a89a6b8afc30a01b0e9a58b788a4745c44bb040023->enter($__internal_2ea1c5afd7a5292caf46e3a89a6b8afc30a01b0e9a58b788a4745c44bb040023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ea1c5afd7a5292caf46e3a89a6b8afc30a01b0e9a58b788a4745c44bb040023->leave($__internal_2ea1c5afd7a5292caf46e3a89a6b8afc30a01b0e9a58b788a4745c44bb040023_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_893eae238895e970b3a790a83224759b3bd3c96d36aaf5a7b2d7fc3216aca001 = $this->env->getExtension("native_profiler");
        $__internal_893eae238895e970b3a790a83224759b3bd3c96d36aaf5a7b2d7fc3216aca001->enter($__internal_893eae238895e970b3a790a83224759b3bd3c96d36aaf5a7b2d7fc3216aca001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_893eae238895e970b3a790a83224759b3bd3c96d36aaf5a7b2d7fc3216aca001->leave($__internal_893eae238895e970b3a790a83224759b3bd3c96d36aaf5a7b2d7fc3216aca001_prof);

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
