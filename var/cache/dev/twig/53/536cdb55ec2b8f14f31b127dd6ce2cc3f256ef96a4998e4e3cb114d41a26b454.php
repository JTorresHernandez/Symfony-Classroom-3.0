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
        $__internal_e0274d7e5271d6714fda2ab88bb66bfae2869802148929157715ff7c500dadde = $this->env->getExtension("native_profiler");
        $__internal_e0274d7e5271d6714fda2ab88bb66bfae2869802148929157715ff7c500dadde->enter($__internal_e0274d7e5271d6714fda2ab88bb66bfae2869802148929157715ff7c500dadde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0274d7e5271d6714fda2ab88bb66bfae2869802148929157715ff7c500dadde->leave($__internal_e0274d7e5271d6714fda2ab88bb66bfae2869802148929157715ff7c500dadde_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7da26164a7a32a0ce2fc0b7da06494867d99630c468402620252f5cccc467c59 = $this->env->getExtension("native_profiler");
        $__internal_7da26164a7a32a0ce2fc0b7da06494867d99630c468402620252f5cccc467c59->enter($__internal_7da26164a7a32a0ce2fc0b7da06494867d99630c468402620252f5cccc467c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7da26164a7a32a0ce2fc0b7da06494867d99630c468402620252f5cccc467c59->leave($__internal_7da26164a7a32a0ce2fc0b7da06494867d99630c468402620252f5cccc467c59_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9cba04a35c7d47cbdb8de40c3059d5f8f8504407391d148b91e52506c3f95f44 = $this->env->getExtension("native_profiler");
        $__internal_9cba04a35c7d47cbdb8de40c3059d5f8f8504407391d148b91e52506c3f95f44->enter($__internal_9cba04a35c7d47cbdb8de40c3059d5f8f8504407391d148b91e52506c3f95f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9cba04a35c7d47cbdb8de40c3059d5f8f8504407391d148b91e52506c3f95f44->leave($__internal_9cba04a35c7d47cbdb8de40c3059d5f8f8504407391d148b91e52506c3f95f44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb937bb8a354a4a0cdf6ea2560a76cbe0574d73398d71493dcad33b40393c230 = $this->env->getExtension("native_profiler");
        $__internal_cb937bb8a354a4a0cdf6ea2560a76cbe0574d73398d71493dcad33b40393c230->enter($__internal_cb937bb8a354a4a0cdf6ea2560a76cbe0574d73398d71493dcad33b40393c230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cb937bb8a354a4a0cdf6ea2560a76cbe0574d73398d71493dcad33b40393c230->leave($__internal_cb937bb8a354a4a0cdf6ea2560a76cbe0574d73398d71493dcad33b40393c230_prof);

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
