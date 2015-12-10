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
        $__internal_eb5ecefa14fe5c41849f8ab9a480f78d60cd9b5e50043cd620ae7b0743ec4c8e = $this->env->getExtension("native_profiler");
        $__internal_eb5ecefa14fe5c41849f8ab9a480f78d60cd9b5e50043cd620ae7b0743ec4c8e->enter($__internal_eb5ecefa14fe5c41849f8ab9a480f78d60cd9b5e50043cd620ae7b0743ec4c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb5ecefa14fe5c41849f8ab9a480f78d60cd9b5e50043cd620ae7b0743ec4c8e->leave($__internal_eb5ecefa14fe5c41849f8ab9a480f78d60cd9b5e50043cd620ae7b0743ec4c8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d25f8905026e20f7da846c41df300659cab7dd599fd7268d54176c0c9b2aa2d1 = $this->env->getExtension("native_profiler");
        $__internal_d25f8905026e20f7da846c41df300659cab7dd599fd7268d54176c0c9b2aa2d1->enter($__internal_d25f8905026e20f7da846c41df300659cab7dd599fd7268d54176c0c9b2aa2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_d25f8905026e20f7da846c41df300659cab7dd599fd7268d54176c0c9b2aa2d1->leave($__internal_d25f8905026e20f7da846c41df300659cab7dd599fd7268d54176c0c9b2aa2d1_prof);

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
