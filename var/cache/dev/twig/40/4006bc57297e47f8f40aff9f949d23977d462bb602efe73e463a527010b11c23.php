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
        $__internal_4bfbb73352850d44dff4de45de859c8a052a803fbe2518344577d8e867d29bdd = $this->env->getExtension("native_profiler");
        $__internal_4bfbb73352850d44dff4de45de859c8a052a803fbe2518344577d8e867d29bdd->enter($__internal_4bfbb73352850d44dff4de45de859c8a052a803fbe2518344577d8e867d29bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bfbb73352850d44dff4de45de859c8a052a803fbe2518344577d8e867d29bdd->leave($__internal_4bfbb73352850d44dff4de45de859c8a052a803fbe2518344577d8e867d29bdd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7f3d29ddbfb495d24e1debfe818635726cd102a13199e649144dd35f803eb52 = $this->env->getExtension("native_profiler");
        $__internal_e7f3d29ddbfb495d24e1debfe818635726cd102a13199e649144dd35f803eb52->enter($__internal_e7f3d29ddbfb495d24e1debfe818635726cd102a13199e649144dd35f803eb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_e7f3d29ddbfb495d24e1debfe818635726cd102a13199e649144dd35f803eb52->leave($__internal_e7f3d29ddbfb495d24e1debfe818635726cd102a13199e649144dd35f803eb52_prof);

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
