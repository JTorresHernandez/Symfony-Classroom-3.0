<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d974e029a2fa0d75a79af04b5abb1b71425f50bc485d715af6141f9c726ad50e extends Twig_Template
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
        $__internal_2591ee8f7b240d475bba044a442741627109c33ccbce36e184d1cd46185255f4 = $this->env->getExtension("native_profiler");
        $__internal_2591ee8f7b240d475bba044a442741627109c33ccbce36e184d1cd46185255f4->enter($__internal_2591ee8f7b240d475bba044a442741627109c33ccbce36e184d1cd46185255f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2591ee8f7b240d475bba044a442741627109c33ccbce36e184d1cd46185255f4->leave($__internal_2591ee8f7b240d475bba044a442741627109c33ccbce36e184d1cd46185255f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96de44162c9012bea7864d689b637ea932629645cd372f5e197faeb9c4b72140 = $this->env->getExtension("native_profiler");
        $__internal_96de44162c9012bea7864d689b637ea932629645cd372f5e197faeb9c4b72140->enter($__internal_96de44162c9012bea7864d689b637ea932629645cd372f5e197faeb9c4b72140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_96de44162c9012bea7864d689b637ea932629645cd372f5e197faeb9c4b72140->leave($__internal_96de44162c9012bea7864d689b637ea932629645cd372f5e197faeb9c4b72140_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_29647268bb1fc78b8d3423c6a60d6bb878fe339ab9e4838d00e6497d0ce70a6e = $this->env->getExtension("native_profiler");
        $__internal_29647268bb1fc78b8d3423c6a60d6bb878fe339ab9e4838d00e6497d0ce70a6e->enter($__internal_29647268bb1fc78b8d3423c6a60d6bb878fe339ab9e4838d00e6497d0ce70a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_29647268bb1fc78b8d3423c6a60d6bb878fe339ab9e4838d00e6497d0ce70a6e->leave($__internal_29647268bb1fc78b8d3423c6a60d6bb878fe339ab9e4838d00e6497d0ce70a6e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ffaa02d59a3c937191f1bfe3db8bea698bfd79fbe2930ed1eb1bc597bb80f21 = $this->env->getExtension("native_profiler");
        $__internal_7ffaa02d59a3c937191f1bfe3db8bea698bfd79fbe2930ed1eb1bc597bb80f21->enter($__internal_7ffaa02d59a3c937191f1bfe3db8bea698bfd79fbe2930ed1eb1bc597bb80f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7ffaa02d59a3c937191f1bfe3db8bea698bfd79fbe2930ed1eb1bc597bb80f21->leave($__internal_7ffaa02d59a3c937191f1bfe3db8bea698bfd79fbe2930ed1eb1bc597bb80f21_prof);

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
