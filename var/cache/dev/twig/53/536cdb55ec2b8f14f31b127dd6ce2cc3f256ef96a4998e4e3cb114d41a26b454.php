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
        $__internal_4227bc78c38ce2d1f9303f36476f8664e0075a21b83989d5ba308f70f7b936c4 = $this->env->getExtension("native_profiler");
        $__internal_4227bc78c38ce2d1f9303f36476f8664e0075a21b83989d5ba308f70f7b936c4->enter($__internal_4227bc78c38ce2d1f9303f36476f8664e0075a21b83989d5ba308f70f7b936c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4227bc78c38ce2d1f9303f36476f8664e0075a21b83989d5ba308f70f7b936c4->leave($__internal_4227bc78c38ce2d1f9303f36476f8664e0075a21b83989d5ba308f70f7b936c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fffa052970c0e138e63cadd52f52ffa4e9f5ab33b8f0b741c52ca9883eb7fcac = $this->env->getExtension("native_profiler");
        $__internal_fffa052970c0e138e63cadd52f52ffa4e9f5ab33b8f0b741c52ca9883eb7fcac->enter($__internal_fffa052970c0e138e63cadd52f52ffa4e9f5ab33b8f0b741c52ca9883eb7fcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fffa052970c0e138e63cadd52f52ffa4e9f5ab33b8f0b741c52ca9883eb7fcac->leave($__internal_fffa052970c0e138e63cadd52f52ffa4e9f5ab33b8f0b741c52ca9883eb7fcac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3937dcab302f12647f67ad89aedb2ca9e41064bf9de43c71ce325126bd87966a = $this->env->getExtension("native_profiler");
        $__internal_3937dcab302f12647f67ad89aedb2ca9e41064bf9de43c71ce325126bd87966a->enter($__internal_3937dcab302f12647f67ad89aedb2ca9e41064bf9de43c71ce325126bd87966a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3937dcab302f12647f67ad89aedb2ca9e41064bf9de43c71ce325126bd87966a->leave($__internal_3937dcab302f12647f67ad89aedb2ca9e41064bf9de43c71ce325126bd87966a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27708220e6c4736925d0da71b37d6be68a8360c88a8d26a6c4a48bb5fdb4bf04 = $this->env->getExtension("native_profiler");
        $__internal_27708220e6c4736925d0da71b37d6be68a8360c88a8d26a6c4a48bb5fdb4bf04->enter($__internal_27708220e6c4736925d0da71b37d6be68a8360c88a8d26a6c4a48bb5fdb4bf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27708220e6c4736925d0da71b37d6be68a8360c88a8d26a6c4a48bb5fdb4bf04->leave($__internal_27708220e6c4736925d0da71b37d6be68a8360c88a8d26a6c4a48bb5fdb4bf04_prof);

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
