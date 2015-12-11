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
        $__internal_fec91a86999cd4111c5e6eed08d4cba9e573883b5b0242f3719ff0afd7ebb457 = $this->env->getExtension("native_profiler");
        $__internal_fec91a86999cd4111c5e6eed08d4cba9e573883b5b0242f3719ff0afd7ebb457->enter($__internal_fec91a86999cd4111c5e6eed08d4cba9e573883b5b0242f3719ff0afd7ebb457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fec91a86999cd4111c5e6eed08d4cba9e573883b5b0242f3719ff0afd7ebb457->leave($__internal_fec91a86999cd4111c5e6eed08d4cba9e573883b5b0242f3719ff0afd7ebb457_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_b4cfda888d5a4ddd9f3c315d9256daf6815f2b6b0d2e79cb0f3b96dd1d3ea120 = $this->env->getExtension("native_profiler");
        $__internal_b4cfda888d5a4ddd9f3c315d9256daf6815f2b6b0d2e79cb0f3b96dd1d3ea120->enter($__internal_b4cfda888d5a4ddd9f3c315d9256daf6815f2b6b0d2e79cb0f3b96dd1d3ea120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_b4cfda888d5a4ddd9f3c315d9256daf6815f2b6b0d2e79cb0f3b96dd1d3ea120->leave($__internal_b4cfda888d5a4ddd9f3c315d9256daf6815f2b6b0d2e79cb0f3b96dd1d3ea120_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc69792f593c9ff37138119669e41e3f4840738d94033fc758e4c0025303ec4f = $this->env->getExtension("native_profiler");
        $__internal_dc69792f593c9ff37138119669e41e3f4840738d94033fc758e4c0025303ec4f->enter($__internal_dc69792f593c9ff37138119669e41e3f4840738d94033fc758e4c0025303ec4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_dc69792f593c9ff37138119669e41e3f4840738d94033fc758e4c0025303ec4f->leave($__internal_dc69792f593c9ff37138119669e41e3f4840738d94033fc758e4c0025303ec4f_prof);

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
