<?php

/* :comment:show-form-edit-mode.html.twig */
class __TwigTemplate_d0c6985abaa72cf1c7bb401c22bfc43a093345086746e3078c4751175af7204a extends Twig_Template
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
        $__internal_a92f5b8498dfde6564c144ff886c3df76ca49ee21187cf7285305e043c7c8dbb = $this->env->getExtension("native_profiler");
        $__internal_a92f5b8498dfde6564c144ff886c3df76ca49ee21187cf7285305e043c7c8dbb->enter($__internal_a92f5b8498dfde6564c144ff886c3df76ca49ee21187cf7285305e043c7c8dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form-edit-mode.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a92f5b8498dfde6564c144ff886c3df76ca49ee21187cf7285305e043c7c8dbb->leave($__internal_a92f5b8498dfde6564c144ff886c3df76ca49ee21187cf7285305e043c7c8dbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc3728ec3f31ed3249a66809353ca92fd789fc212482523bd18f1f581448dcf7 = $this->env->getExtension("native_profiler");
        $__internal_cc3728ec3f31ed3249a66809353ca92fd789fc212482523bd18f1f581448dcf7->enter($__internal_cc3728ec3f31ed3249a66809353ca92fd789fc212482523bd18f1f581448dcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_cc3728ec3f31ed3249a66809353ca92fd789fc212482523bd18f1f581448dcf7->leave($__internal_cc3728ec3f31ed3249a66809353ca92fd789fc212482523bd18f1f581448dcf7_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_58262f29b8dbf50e12fab7fde4f37085866ee56f57f462a11192b3821341db9f = $this->env->getExtension("native_profiler");
        $__internal_58262f29b8dbf50e12fab7fde4f37085866ee56f57f462a11192b3821341db9f->enter($__internal_58262f29b8dbf50e12fab7fde4f37085866ee56f57f462a11192b3821341db9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_58262f29b8dbf50e12fab7fde4f37085866ee56f57f462a11192b3821341db9f->leave($__internal_58262f29b8dbf50e12fab7fde4f37085866ee56f57f462a11192b3821341db9f_prof);

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
