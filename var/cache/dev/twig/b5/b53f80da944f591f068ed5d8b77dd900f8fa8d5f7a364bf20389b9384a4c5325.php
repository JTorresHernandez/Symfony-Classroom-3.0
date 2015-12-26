<?php

/* :comment:show-form-edit-mode.html.twig */
class __TwigTemplate_521cd913691b3a0ad661408ef90d0da2db1431f8b0d9802dc42540d17d328865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":comment:show-form-edit-mode.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76e0b02d396530f2a38b67ed0ad59c482a71be1e17885b235105afbf38a4d8ad = $this->env->getExtension("native_profiler");
        $__internal_76e0b02d396530f2a38b67ed0ad59c482a71be1e17885b235105afbf38a4d8ad->enter($__internal_76e0b02d396530f2a38b67ed0ad59c482a71be1e17885b235105afbf38a4d8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form-edit-mode.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76e0b02d396530f2a38b67ed0ad59c482a71be1e17885b235105afbf38a4d8ad->leave($__internal_76e0b02d396530f2a38b67ed0ad59c482a71be1e17885b235105afbf38a4d8ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf34461a2ba441d8325443537108cdaa262c2c5bf5515565a5c96fd80217aebc = $this->env->getExtension("native_profiler");
        $__internal_bf34461a2ba441d8325443537108cdaa262c2c5bf5515565a5c96fd80217aebc->enter($__internal_bf34461a2ba441d8325443537108cdaa262c2c5bf5515565a5c96fd80217aebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_bf34461a2ba441d8325443537108cdaa262c2c5bf5515565a5c96fd80217aebc->leave($__internal_bf34461a2ba441d8325443537108cdaa262c2c5bf5515565a5c96fd80217aebc_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4d186591440483400dc5c667e9e0c1dc93eb7f5b8332a25b0f3bc76dd700912a = $this->env->getExtension("native_profiler");
        $__internal_4d186591440483400dc5c667e9e0c1dc93eb7f5b8332a25b0f3bc76dd700912a->enter($__internal_4d186591440483400dc5c667e9e0c1dc93eb7f5b8332a25b0f3bc76dd700912a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_4d186591440483400dc5c667e9e0c1dc93eb7f5b8332a25b0f3bc76dd700912a->leave($__internal_4d186591440483400dc5c667e9e0c1dc93eb7f5b8332a25b0f3bc76dd700912a_prof);

    }

    public function getTemplateName()
    {
        return ":comment:show-form-edit-mode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
