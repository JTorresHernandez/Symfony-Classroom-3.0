<?php

/* :article:article.html.twig */
class __TwigTemplate_e866d88db5bfc3839ae4c73d806840eff1116960bc13903a8201b76f75991bb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:article.html.twig", 1);
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
        $__internal_20bd3c7355fb6213fb1fbce437a2e54a1b6fc2d2fabfb406b6b5a04fb4bd711b = $this->env->getExtension("native_profiler");
        $__internal_20bd3c7355fb6213fb1fbce437a2e54a1b6fc2d2fabfb406b6b5a04fb4bd711b->enter($__internal_20bd3c7355fb6213fb1fbce437a2e54a1b6fc2d2fabfb406b6b5a04fb4bd711b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20bd3c7355fb6213fb1fbce437a2e54a1b6fc2d2fabfb406b6b5a04fb4bd711b->leave($__internal_20bd3c7355fb6213fb1fbce437a2e54a1b6fc2d2fabfb406b6b5a04fb4bd711b_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_b4d52c9673f59ec879343f2fde37b9e067d78bf8ad0ae67c08cb76eeee98a056 = $this->env->getExtension("native_profiler");
        $__internal_b4d52c9673f59ec879343f2fde37b9e067d78bf8ad0ae67c08cb76eeee98a056->enter($__internal_b4d52c9673f59ec879343f2fde37b9e067d78bf8ad0ae67c08cb76eeee98a056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_b4d52c9673f59ec879343f2fde37b9e067d78bf8ad0ae67c08cb76eeee98a056->leave($__internal_b4d52c9673f59ec879343f2fde37b9e067d78bf8ad0ae67c08cb76eeee98a056_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2086bacd77f96eed5b98d88a06f6b9218a265bfdc103e84571c7da0c302ed01 = $this->env->getExtension("native_profiler");
        $__internal_f2086bacd77f96eed5b98d88a06f6b9218a265bfdc103e84571c7da0c302ed01->enter($__internal_f2086bacd77f96eed5b98d88a06f6b9218a265bfdc103e84571c7da0c302ed01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display($context);
        
        $__internal_f2086bacd77f96eed5b98d88a06f6b9218a265bfdc103e84571c7da0c302ed01->leave($__internal_f2086bacd77f96eed5b98d88a06f6b9218a265bfdc103e84571c7da0c302ed01_prof);

    }

    public function getTemplateName()
    {
        return ":article:article.html.twig";
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
/* {% block headTitle %}Show Article{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include ':article:article_content.html.twig' %}*/
/* {% endblock %}*/
