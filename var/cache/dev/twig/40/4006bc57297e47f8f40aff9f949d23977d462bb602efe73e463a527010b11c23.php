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
        $__internal_a2cdd7b3248887528d47252cba4d36b5e2ee2e83c2041d0202efd3380acdcd29 = $this->env->getExtension("native_profiler");
        $__internal_a2cdd7b3248887528d47252cba4d36b5e2ee2e83c2041d0202efd3380acdcd29->enter($__internal_a2cdd7b3248887528d47252cba4d36b5e2ee2e83c2041d0202efd3380acdcd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2cdd7b3248887528d47252cba4d36b5e2ee2e83c2041d0202efd3380acdcd29->leave($__internal_a2cdd7b3248887528d47252cba4d36b5e2ee2e83c2041d0202efd3380acdcd29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_063ac59212f11d843865f85a0112e5874f1d2e64d912cd909c4364af13996ec9 = $this->env->getExtension("native_profiler");
        $__internal_063ac59212f11d843865f85a0112e5874f1d2e64d912cd909c4364af13996ec9->enter($__internal_063ac59212f11d843865f85a0112e5874f1d2e64d912cd909c4364af13996ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_063ac59212f11d843865f85a0112e5874f1d2e64d912cd909c4364af13996ec9->leave($__internal_063ac59212f11d843865f85a0112e5874f1d2e64d912cd909c4364af13996ec9_prof);

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
