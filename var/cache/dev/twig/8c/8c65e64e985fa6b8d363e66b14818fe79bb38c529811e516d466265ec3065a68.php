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
        $__internal_be6093b176f12c319a3c67f39e6b7d8aa343b6fb421840e07197c97659af4750 = $this->env->getExtension("native_profiler");
        $__internal_be6093b176f12c319a3c67f39e6b7d8aa343b6fb421840e07197c97659af4750->enter($__internal_be6093b176f12c319a3c67f39e6b7d8aa343b6fb421840e07197c97659af4750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be6093b176f12c319a3c67f39e6b7d8aa343b6fb421840e07197c97659af4750->leave($__internal_be6093b176f12c319a3c67f39e6b7d8aa343b6fb421840e07197c97659af4750_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3108a903f674647be5cf7ea6705c662c553add82ff3c990ef9172000e442de1f = $this->env->getExtension("native_profiler");
        $__internal_3108a903f674647be5cf7ea6705c662c553add82ff3c990ef9172000e442de1f->enter($__internal_3108a903f674647be5cf7ea6705c662c553add82ff3c990ef9172000e442de1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3108a903f674647be5cf7ea6705c662c553add82ff3c990ef9172000e442de1f->leave($__internal_3108a903f674647be5cf7ea6705c662c553add82ff3c990ef9172000e442de1f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f7ecf557f07d1cb47cef1f4a33a96f31238c2f0e699b68bcc2b41492ee07c876 = $this->env->getExtension("native_profiler");
        $__internal_f7ecf557f07d1cb47cef1f4a33a96f31238c2f0e699b68bcc2b41492ee07c876->enter($__internal_f7ecf557f07d1cb47cef1f4a33a96f31238c2f0e699b68bcc2b41492ee07c876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f7ecf557f07d1cb47cef1f4a33a96f31238c2f0e699b68bcc2b41492ee07c876->leave($__internal_f7ecf557f07d1cb47cef1f4a33a96f31238c2f0e699b68bcc2b41492ee07c876_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab5ef87f47d1f823fea8e311a09301b6c74bb6a68b1afa1f6ff2635472325479 = $this->env->getExtension("native_profiler");
        $__internal_ab5ef87f47d1f823fea8e311a09301b6c74bb6a68b1afa1f6ff2635472325479->enter($__internal_ab5ef87f47d1f823fea8e311a09301b6c74bb6a68b1afa1f6ff2635472325479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab5ef87f47d1f823fea8e311a09301b6c74bb6a68b1afa1f6ff2635472325479->leave($__internal_ab5ef87f47d1f823fea8e311a09301b6c74bb6a68b1afa1f6ff2635472325479_prof);

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
