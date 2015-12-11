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
        $__internal_54c2c016fa629fa66b9606b80c85293577dd48d105f72a57d291e0b7e7b3870c = $this->env->getExtension("native_profiler");
        $__internal_54c2c016fa629fa66b9606b80c85293577dd48d105f72a57d291e0b7e7b3870c->enter($__internal_54c2c016fa629fa66b9606b80c85293577dd48d105f72a57d291e0b7e7b3870c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54c2c016fa629fa66b9606b80c85293577dd48d105f72a57d291e0b7e7b3870c->leave($__internal_54c2c016fa629fa66b9606b80c85293577dd48d105f72a57d291e0b7e7b3870c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_94e94be057ffb7af0e4904b67ae33ec576a32d0f4e0e3418086075afb4a2912a = $this->env->getExtension("native_profiler");
        $__internal_94e94be057ffb7af0e4904b67ae33ec576a32d0f4e0e3418086075afb4a2912a->enter($__internal_94e94be057ffb7af0e4904b67ae33ec576a32d0f4e0e3418086075afb4a2912a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_94e94be057ffb7af0e4904b67ae33ec576a32d0f4e0e3418086075afb4a2912a->leave($__internal_94e94be057ffb7af0e4904b67ae33ec576a32d0f4e0e3418086075afb4a2912a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bbe4138bafbe0d41b50bb06052f310b7b8fdf3e3b8c334b41e95937db5138bb0 = $this->env->getExtension("native_profiler");
        $__internal_bbe4138bafbe0d41b50bb06052f310b7b8fdf3e3b8c334b41e95937db5138bb0->enter($__internal_bbe4138bafbe0d41b50bb06052f310b7b8fdf3e3b8c334b41e95937db5138bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bbe4138bafbe0d41b50bb06052f310b7b8fdf3e3b8c334b41e95937db5138bb0->leave($__internal_bbe4138bafbe0d41b50bb06052f310b7b8fdf3e3b8c334b41e95937db5138bb0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5fff05613bee51b54f08c8effb5f98ff452d97405db5e97875ec0832e522941 = $this->env->getExtension("native_profiler");
        $__internal_a5fff05613bee51b54f08c8effb5f98ff452d97405db5e97875ec0832e522941->enter($__internal_a5fff05613bee51b54f08c8effb5f98ff452d97405db5e97875ec0832e522941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a5fff05613bee51b54f08c8effb5f98ff452d97405db5e97875ec0832e522941->leave($__internal_a5fff05613bee51b54f08c8effb5f98ff452d97405db5e97875ec0832e522941_prof);

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
