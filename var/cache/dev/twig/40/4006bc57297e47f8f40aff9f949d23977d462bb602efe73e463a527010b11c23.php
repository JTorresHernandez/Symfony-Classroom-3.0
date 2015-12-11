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
        $__internal_6a4d85d82dd2774e0f6fcb262e7d30911fba746bd4bb25e16d9af7673c6fc5bc = $this->env->getExtension("native_profiler");
        $__internal_6a4d85d82dd2774e0f6fcb262e7d30911fba746bd4bb25e16d9af7673c6fc5bc->enter($__internal_6a4d85d82dd2774e0f6fcb262e7d30911fba746bd4bb25e16d9af7673c6fc5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a4d85d82dd2774e0f6fcb262e7d30911fba746bd4bb25e16d9af7673c6fc5bc->leave($__internal_6a4d85d82dd2774e0f6fcb262e7d30911fba746bd4bb25e16d9af7673c6fc5bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_93a1cf5ed6bdae3812a01979688fb029d331a5d49a1317944f9154da6bb8f563 = $this->env->getExtension("native_profiler");
        $__internal_93a1cf5ed6bdae3812a01979688fb029d331a5d49a1317944f9154da6bb8f563->enter($__internal_93a1cf5ed6bdae3812a01979688fb029d331a5d49a1317944f9154da6bb8f563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_93a1cf5ed6bdae3812a01979688fb029d331a5d49a1317944f9154da6bb8f563->leave($__internal_93a1cf5ed6bdae3812a01979688fb029d331a5d49a1317944f9154da6bb8f563_prof);

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
