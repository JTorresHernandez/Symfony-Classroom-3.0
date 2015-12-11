<?php

/* :index:email.html.twig */
class __TwigTemplate_6c23e866f9bf0c65a18477c17ba7ee691e1612e93ef47fb9c750d41a93084cef extends Twig_Template
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
        $__internal_91d24a7747d6bf641ea01951bed5058662de23bac7815d0214b9d353d1a90bea = $this->env->getExtension("native_profiler");
        $__internal_91d24a7747d6bf641ea01951bed5058662de23bac7815d0214b9d353d1a90bea->enter($__internal_91d24a7747d6bf641ea01951bed5058662de23bac7815d0214b9d353d1a90bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91d24a7747d6bf641ea01951bed5058662de23bac7815d0214b9d353d1a90bea->leave($__internal_91d24a7747d6bf641ea01951bed5058662de23bac7815d0214b9d353d1a90bea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4a06ba06c1536f2d7f4b4430ed2cc6a07450f8931dfbff493393935ec8c844f = $this->env->getExtension("native_profiler");
        $__internal_e4a06ba06c1536f2d7f4b4430ed2cc6a07450f8931dfbff493393935ec8c844f->enter($__internal_e4a06ba06c1536f2d7f4b4430ed2cc6a07450f8931dfbff493393935ec8c844f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_e4a06ba06c1536f2d7f4b4430ed2cc6a07450f8931dfbff493393935ec8c844f->leave($__internal_e4a06ba06c1536f2d7f4b4430ed2cc6a07450f8931dfbff493393935ec8c844f_prof);

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
