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
        $__internal_ea2e2d3cfc35da43fbb7f29ccc309d1a1f8176b490a08a5c00ef61f9998c41c9 = $this->env->getExtension("native_profiler");
        $__internal_ea2e2d3cfc35da43fbb7f29ccc309d1a1f8176b490a08a5c00ef61f9998c41c9->enter($__internal_ea2e2d3cfc35da43fbb7f29ccc309d1a1f8176b490a08a5c00ef61f9998c41c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2e2d3cfc35da43fbb7f29ccc309d1a1f8176b490a08a5c00ef61f9998c41c9->leave($__internal_ea2e2d3cfc35da43fbb7f29ccc309d1a1f8176b490a08a5c00ef61f9998c41c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ccd12bf8f66bc4d4b2700c58e40861a113e62f592fde6998585aae61c5e530e6 = $this->env->getExtension("native_profiler");
        $__internal_ccd12bf8f66bc4d4b2700c58e40861a113e62f592fde6998585aae61c5e530e6->enter($__internal_ccd12bf8f66bc4d4b2700c58e40861a113e62f592fde6998585aae61c5e530e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ccd12bf8f66bc4d4b2700c58e40861a113e62f592fde6998585aae61c5e530e6->leave($__internal_ccd12bf8f66bc4d4b2700c58e40861a113e62f592fde6998585aae61c5e530e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_614a58fa8993162f645834bb4ec9916c1c2f8ff9bc85e5afeaf02a1d6a943021 = $this->env->getExtension("native_profiler");
        $__internal_614a58fa8993162f645834bb4ec9916c1c2f8ff9bc85e5afeaf02a1d6a943021->enter($__internal_614a58fa8993162f645834bb4ec9916c1c2f8ff9bc85e5afeaf02a1d6a943021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_614a58fa8993162f645834bb4ec9916c1c2f8ff9bc85e5afeaf02a1d6a943021->leave($__internal_614a58fa8993162f645834bb4ec9916c1c2f8ff9bc85e5afeaf02a1d6a943021_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f9ff7826cd7b927acc7fcca38d4a2e6f83ce932f07c2e1e84a97d632ba674e3 = $this->env->getExtension("native_profiler");
        $__internal_3f9ff7826cd7b927acc7fcca38d4a2e6f83ce932f07c2e1e84a97d632ba674e3->enter($__internal_3f9ff7826cd7b927acc7fcca38d4a2e6f83ce932f07c2e1e84a97d632ba674e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3f9ff7826cd7b927acc7fcca38d4a2e6f83ce932f07c2e1e84a97d632ba674e3->leave($__internal_3f9ff7826cd7b927acc7fcca38d4a2e6f83ce932f07c2e1e84a97d632ba674e3_prof);

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
