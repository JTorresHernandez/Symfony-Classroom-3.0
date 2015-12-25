<?php

/* :index:email.html.twig */
class __TwigTemplate_d6c62f76e7d4386ae0d66da65120901b91c4b0793ca8046920d71fe25bfa079e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":index:email.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e70cf1e652aba9dac9663ee4a276b0c65975df84ac54747c35a0ad17ade5364e = $this->env->getExtension("native_profiler");
        $__internal_e70cf1e652aba9dac9663ee4a276b0c65975df84ac54747c35a0ad17ade5364e->enter($__internal_e70cf1e652aba9dac9663ee4a276b0c65975df84ac54747c35a0ad17ade5364e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e70cf1e652aba9dac9663ee4a276b0c65975df84ac54747c35a0ad17ade5364e->leave($__internal_e70cf1e652aba9dac9663ee4a276b0c65975df84ac54747c35a0ad17ade5364e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8001005a768a47c9dc2c2c153436e887880418e21d004acd5cfa760d55bb308a = $this->env->getExtension("native_profiler");
        $__internal_8001005a768a47c9dc2c2c153436e887880418e21d004acd5cfa760d55bb308a->enter($__internal_8001005a768a47c9dc2c2c153436e887880418e21d004acd5cfa760d55bb308a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_8001005a768a47c9dc2c2c153436e887880418e21d004acd5cfa760d55bb308a->leave($__internal_8001005a768a47c9dc2c2c153436e887880418e21d004acd5cfa760d55bb308a_prof);

    }

    public function getTemplateName()
    {
        return ":index:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>Email was sent</div>*/
/* {% endblock %}*/
