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
        $__internal_44bb10b57d8ca351c1b9c47b3813f77072b6e45837fa3899f3941be7c1ad8565 = $this->env->getExtension("native_profiler");
        $__internal_44bb10b57d8ca351c1b9c47b3813f77072b6e45837fa3899f3941be7c1ad8565->enter($__internal_44bb10b57d8ca351c1b9c47b3813f77072b6e45837fa3899f3941be7c1ad8565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44bb10b57d8ca351c1b9c47b3813f77072b6e45837fa3899f3941be7c1ad8565->leave($__internal_44bb10b57d8ca351c1b9c47b3813f77072b6e45837fa3899f3941be7c1ad8565_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dbdd5d28e03912294880e71d6f644e5ac8fe5a1a2d0356b0358e23bfea7cb3c0 = $this->env->getExtension("native_profiler");
        $__internal_dbdd5d28e03912294880e71d6f644e5ac8fe5a1a2d0356b0358e23bfea7cb3c0->enter($__internal_dbdd5d28e03912294880e71d6f644e5ac8fe5a1a2d0356b0358e23bfea7cb3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dbdd5d28e03912294880e71d6f644e5ac8fe5a1a2d0356b0358e23bfea7cb3c0->leave($__internal_dbdd5d28e03912294880e71d6f644e5ac8fe5a1a2d0356b0358e23bfea7cb3c0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb330d2b913c42a46cd5cf8dad6ee16ff7231d6904e586892ba5953699a2bf1c = $this->env->getExtension("native_profiler");
        $__internal_bb330d2b913c42a46cd5cf8dad6ee16ff7231d6904e586892ba5953699a2bf1c->enter($__internal_bb330d2b913c42a46cd5cf8dad6ee16ff7231d6904e586892ba5953699a2bf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb330d2b913c42a46cd5cf8dad6ee16ff7231d6904e586892ba5953699a2bf1c->leave($__internal_bb330d2b913c42a46cd5cf8dad6ee16ff7231d6904e586892ba5953699a2bf1c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8cabb8ccf5ec072c7bc3114b1eed9380152341cbd6d02e2d17ebb31279538e6 = $this->env->getExtension("native_profiler");
        $__internal_f8cabb8ccf5ec072c7bc3114b1eed9380152341cbd6d02e2d17ebb31279538e6->enter($__internal_f8cabb8ccf5ec072c7bc3114b1eed9380152341cbd6d02e2d17ebb31279538e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f8cabb8ccf5ec072c7bc3114b1eed9380152341cbd6d02e2d17ebb31279538e6->leave($__internal_f8cabb8ccf5ec072c7bc3114b1eed9380152341cbd6d02e2d17ebb31279538e6_prof);

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
