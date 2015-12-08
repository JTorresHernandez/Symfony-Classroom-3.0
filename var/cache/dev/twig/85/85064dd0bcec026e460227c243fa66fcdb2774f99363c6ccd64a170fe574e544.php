<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_79393f6542bef229fa71f7d51a9f2e80f75b6b8e468336634ec832ffdcf56fea extends Twig_Template
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
        $__internal_a174c788c5796abef431a7f486a1e5daf5de1d1007a9c7ad20d67935efd661f1 = $this->env->getExtension("native_profiler");
        $__internal_a174c788c5796abef431a7f486a1e5daf5de1d1007a9c7ad20d67935efd661f1->enter($__internal_a174c788c5796abef431a7f486a1e5daf5de1d1007a9c7ad20d67935efd661f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a174c788c5796abef431a7f486a1e5daf5de1d1007a9c7ad20d67935efd661f1->leave($__internal_a174c788c5796abef431a7f486a1e5daf5de1d1007a9c7ad20d67935efd661f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_920ab91c16dda7060aa0b736c78c866056dd99244bf8c41b86dae63c5a817825 = $this->env->getExtension("native_profiler");
        $__internal_920ab91c16dda7060aa0b736c78c866056dd99244bf8c41b86dae63c5a817825->enter($__internal_920ab91c16dda7060aa0b736c78c866056dd99244bf8c41b86dae63c5a817825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_920ab91c16dda7060aa0b736c78c866056dd99244bf8c41b86dae63c5a817825->leave($__internal_920ab91c16dda7060aa0b736c78c866056dd99244bf8c41b86dae63c5a817825_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b948a2d507cc59b8a0882e2e14abd8e9a03e582d6d2cda37aabea244f0e6db26 = $this->env->getExtension("native_profiler");
        $__internal_b948a2d507cc59b8a0882e2e14abd8e9a03e582d6d2cda37aabea244f0e6db26->enter($__internal_b948a2d507cc59b8a0882e2e14abd8e9a03e582d6d2cda37aabea244f0e6db26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b948a2d507cc59b8a0882e2e14abd8e9a03e582d6d2cda37aabea244f0e6db26->leave($__internal_b948a2d507cc59b8a0882e2e14abd8e9a03e582d6d2cda37aabea244f0e6db26_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d910d3f746c333b62b284bb951fdf886f5cc52799afc2b9b428935fa94f55906 = $this->env->getExtension("native_profiler");
        $__internal_d910d3f746c333b62b284bb951fdf886f5cc52799afc2b9b428935fa94f55906->enter($__internal_d910d3f746c333b62b284bb951fdf886f5cc52799afc2b9b428935fa94f55906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d910d3f746c333b62b284bb951fdf886f5cc52799afc2b9b428935fa94f55906->leave($__internal_d910d3f746c333b62b284bb951fdf886f5cc52799afc2b9b428935fa94f55906_prof);

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
