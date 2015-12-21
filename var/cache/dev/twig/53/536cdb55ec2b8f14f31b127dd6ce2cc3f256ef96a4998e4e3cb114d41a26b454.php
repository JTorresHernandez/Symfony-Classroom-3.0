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
        $__internal_4c417ffad24cc498c3959504dbbf3eb31bc2df4b582099ebd0bd47abbcb2380a = $this->env->getExtension("native_profiler");
        $__internal_4c417ffad24cc498c3959504dbbf3eb31bc2df4b582099ebd0bd47abbcb2380a->enter($__internal_4c417ffad24cc498c3959504dbbf3eb31bc2df4b582099ebd0bd47abbcb2380a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c417ffad24cc498c3959504dbbf3eb31bc2df4b582099ebd0bd47abbcb2380a->leave($__internal_4c417ffad24cc498c3959504dbbf3eb31bc2df4b582099ebd0bd47abbcb2380a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13d20c85d9e9b93f8d387f5e04d3a9d7eb13e882a88f24a9e566d6923ee360d9 = $this->env->getExtension("native_profiler");
        $__internal_13d20c85d9e9b93f8d387f5e04d3a9d7eb13e882a88f24a9e566d6923ee360d9->enter($__internal_13d20c85d9e9b93f8d387f5e04d3a9d7eb13e882a88f24a9e566d6923ee360d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13d20c85d9e9b93f8d387f5e04d3a9d7eb13e882a88f24a9e566d6923ee360d9->leave($__internal_13d20c85d9e9b93f8d387f5e04d3a9d7eb13e882a88f24a9e566d6923ee360d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79ce6647a18849c50843e7470eb16d23799f98d34e9b632ce453a720d52b8ab5 = $this->env->getExtension("native_profiler");
        $__internal_79ce6647a18849c50843e7470eb16d23799f98d34e9b632ce453a720d52b8ab5->enter($__internal_79ce6647a18849c50843e7470eb16d23799f98d34e9b632ce453a720d52b8ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_79ce6647a18849c50843e7470eb16d23799f98d34e9b632ce453a720d52b8ab5->leave($__internal_79ce6647a18849c50843e7470eb16d23799f98d34e9b632ce453a720d52b8ab5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f0d58f0da420ee7ea282582df0ea5b382ce448b3157db2b37d1a7fb8c0b2c9a = $this->env->getExtension("native_profiler");
        $__internal_6f0d58f0da420ee7ea282582df0ea5b382ce448b3157db2b37d1a7fb8c0b2c9a->enter($__internal_6f0d58f0da420ee7ea282582df0ea5b382ce448b3157db2b37d1a7fb8c0b2c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f0d58f0da420ee7ea282582df0ea5b382ce448b3157db2b37d1a7fb8c0b2c9a->leave($__internal_6f0d58f0da420ee7ea282582df0ea5b382ce448b3157db2b37d1a7fb8c0b2c9a_prof);

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
