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
        $__internal_b6fb5b8a5b7402b7009e72d49829312fe680d759677997a2a0037503942f8502 = $this->env->getExtension("native_profiler");
        $__internal_b6fb5b8a5b7402b7009e72d49829312fe680d759677997a2a0037503942f8502->enter($__internal_b6fb5b8a5b7402b7009e72d49829312fe680d759677997a2a0037503942f8502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form-edit-mode.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6fb5b8a5b7402b7009e72d49829312fe680d759677997a2a0037503942f8502->leave($__internal_b6fb5b8a5b7402b7009e72d49829312fe680d759677997a2a0037503942f8502_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b60d2a630d5df7fc8fa1a1a0bb41ab349784f968d4496eaabcd276a6d665a117 = $this->env->getExtension("native_profiler");
        $__internal_b60d2a630d5df7fc8fa1a1a0bb41ab349784f968d4496eaabcd276a6d665a117->enter($__internal_b60d2a630d5df7fc8fa1a1a0bb41ab349784f968d4496eaabcd276a6d665a117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_b60d2a630d5df7fc8fa1a1a0bb41ab349784f968d4496eaabcd276a6d665a117->leave($__internal_b60d2a630d5df7fc8fa1a1a0bb41ab349784f968d4496eaabcd276a6d665a117_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_93059b110a51f18cc7a89b2638165e3de46f06fcfc11caefd526d74496ab2472 = $this->env->getExtension("native_profiler");
        $__internal_93059b110a51f18cc7a89b2638165e3de46f06fcfc11caefd526d74496ab2472->enter($__internal_93059b110a51f18cc7a89b2638165e3de46f06fcfc11caefd526d74496ab2472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_93059b110a51f18cc7a89b2638165e3de46f06fcfc11caefd526d74496ab2472->leave($__internal_93059b110a51f18cc7a89b2638165e3de46f06fcfc11caefd526d74496ab2472_prof);

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
