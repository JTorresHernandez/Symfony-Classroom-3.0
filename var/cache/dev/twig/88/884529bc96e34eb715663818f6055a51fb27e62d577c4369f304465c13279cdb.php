<?php

/* :article:form.html.twig */
class __TwigTemplate_baf1800b6270251c48ea5efbb13d1940e14b72814141264eb7fab4ca07755c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:form.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a53dde6ba0deee2db6dff95426a6af1535d36b6690b2ea02b8b2c5d31538cd3d = $this->env->getExtension("native_profiler");
        $__internal_a53dde6ba0deee2db6dff95426a6af1535d36b6690b2ea02b8b2c5d31538cd3d->enter($__internal_a53dde6ba0deee2db6dff95426a6af1535d36b6690b2ea02b8b2c5d31538cd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a53dde6ba0deee2db6dff95426a6af1535d36b6690b2ea02b8b2c5d31538cd3d->leave($__internal_a53dde6ba0deee2db6dff95426a6af1535d36b6690b2ea02b8b2c5d31538cd3d_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_4148175cf4191e735b6e54005e94d78ac9c9191952a8e6ae989c5f01ac7f0459 = $this->env->getExtension("native_profiler");
        $__internal_4148175cf4191e735b6e54005e94d78ac9c9191952a8e6ae989c5f01ac7f0459->enter($__internal_4148175cf4191e735b6e54005e94d78ac9c9191952a8e6ae989c5f01ac7f0459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_4148175cf4191e735b6e54005e94d78ac9c9191952a8e6ae989c5f01ac7f0459->leave($__internal_4148175cf4191e735b6e54005e94d78ac9c9191952a8e6ae989c5f01ac7f0459_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4b9a6963993954de8a82d8677c33d10c9cf78743cafe7b1285f2a9a436e528a = $this->env->getExtension("native_profiler");
        $__internal_b4b9a6963993954de8a82d8677c33d10c9cf78743cafe7b1285f2a9a436e528a->enter($__internal_b4b9a6963993954de8a82d8677c33d10c9cf78743cafe7b1285f2a9a436e528a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_b4b9a6963993954de8a82d8677c33d10c9cf78743cafe7b1285f2a9a436e528a->leave($__internal_b4b9a6963993954de8a82d8677c33d10c9cf78743cafe7b1285f2a9a436e528a_prof);

    }

    public function getTemplateName()
    {
        return ":article:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}{{ title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
