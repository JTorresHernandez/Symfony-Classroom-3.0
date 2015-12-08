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
        $__internal_f6dc3f0c8aa8c6cace4142e28fcc2c915f4a66e7f32b2cc85a02a54054057052 = $this->env->getExtension("native_profiler");
        $__internal_f6dc3f0c8aa8c6cace4142e28fcc2c915f4a66e7f32b2cc85a02a54054057052->enter($__internal_f6dc3f0c8aa8c6cace4142e28fcc2c915f4a66e7f32b2cc85a02a54054057052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6dc3f0c8aa8c6cace4142e28fcc2c915f4a66e7f32b2cc85a02a54054057052->leave($__internal_f6dc3f0c8aa8c6cace4142e28fcc2c915f4a66e7f32b2cc85a02a54054057052_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_35d68d0cbce06f931c05b7fabfd908ac302621104964302fdfecae36bedd629f = $this->env->getExtension("native_profiler");
        $__internal_35d68d0cbce06f931c05b7fabfd908ac302621104964302fdfecae36bedd629f->enter($__internal_35d68d0cbce06f931c05b7fabfd908ac302621104964302fdfecae36bedd629f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_35d68d0cbce06f931c05b7fabfd908ac302621104964302fdfecae36bedd629f->leave($__internal_35d68d0cbce06f931c05b7fabfd908ac302621104964302fdfecae36bedd629f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1156caa17375140c282264fa8be1ba9e41be5b38359a7179d4b21c6789bee0ac = $this->env->getExtension("native_profiler");
        $__internal_1156caa17375140c282264fa8be1ba9e41be5b38359a7179d4b21c6789bee0ac->enter($__internal_1156caa17375140c282264fa8be1ba9e41be5b38359a7179d4b21c6789bee0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_1156caa17375140c282264fa8be1ba9e41be5b38359a7179d4b21c6789bee0ac->leave($__internal_1156caa17375140c282264fa8be1ba9e41be5b38359a7179d4b21c6789bee0ac_prof);

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
