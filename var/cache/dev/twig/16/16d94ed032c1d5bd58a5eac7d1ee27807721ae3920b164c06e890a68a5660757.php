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
        $__internal_246b3ab5d6f7fde9caa3a74c2e0edf074fd4ed4aa65d6f50813ce6bae5b72429 = $this->env->getExtension("native_profiler");
        $__internal_246b3ab5d6f7fde9caa3a74c2e0edf074fd4ed4aa65d6f50813ce6bae5b72429->enter($__internal_246b3ab5d6f7fde9caa3a74c2e0edf074fd4ed4aa65d6f50813ce6bae5b72429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_246b3ab5d6f7fde9caa3a74c2e0edf074fd4ed4aa65d6f50813ce6bae5b72429->leave($__internal_246b3ab5d6f7fde9caa3a74c2e0edf074fd4ed4aa65d6f50813ce6bae5b72429_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ac0dc99fc9638aa8c6e78d5ba1eb052ffb8399a1945458fdcfb9f551b3454b4 = $this->env->getExtension("native_profiler");
        $__internal_3ac0dc99fc9638aa8c6e78d5ba1eb052ffb8399a1945458fdcfb9f551b3454b4->enter($__internal_3ac0dc99fc9638aa8c6e78d5ba1eb052ffb8399a1945458fdcfb9f551b3454b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ac0dc99fc9638aa8c6e78d5ba1eb052ffb8399a1945458fdcfb9f551b3454b4->leave($__internal_3ac0dc99fc9638aa8c6e78d5ba1eb052ffb8399a1945458fdcfb9f551b3454b4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8be7da1b117763b2986f29191fd4f465460ca72ff1bc8e650da8743ac8bbc537 = $this->env->getExtension("native_profiler");
        $__internal_8be7da1b117763b2986f29191fd4f465460ca72ff1bc8e650da8743ac8bbc537->enter($__internal_8be7da1b117763b2986f29191fd4f465460ca72ff1bc8e650da8743ac8bbc537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8be7da1b117763b2986f29191fd4f465460ca72ff1bc8e650da8743ac8bbc537->leave($__internal_8be7da1b117763b2986f29191fd4f465460ca72ff1bc8e650da8743ac8bbc537_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e29445c025a7c1c19bdeb43628a2bfe5bd392886fabb94c7d04a0a450dde331 = $this->env->getExtension("native_profiler");
        $__internal_3e29445c025a7c1c19bdeb43628a2bfe5bd392886fabb94c7d04a0a450dde331->enter($__internal_3e29445c025a7c1c19bdeb43628a2bfe5bd392886fabb94c7d04a0a450dde331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e29445c025a7c1c19bdeb43628a2bfe5bd392886fabb94c7d04a0a450dde331->leave($__internal_3e29445c025a7c1c19bdeb43628a2bfe5bd392886fabb94c7d04a0a450dde331_prof);

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
