<?php

/* :article:article.html.twig */
class __TwigTemplate_f4be071e46d2528bd3ce318920551926e7d6a28c7a85027066709b5c81348e36 extends Twig_Template
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
        $__internal_02d08a6a0a017d2cb46a600c682dff815ab802badf66c6526821aa05edea976f = $this->env->getExtension("native_profiler");
        $__internal_02d08a6a0a017d2cb46a600c682dff815ab802badf66c6526821aa05edea976f->enter($__internal_02d08a6a0a017d2cb46a600c682dff815ab802badf66c6526821aa05edea976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02d08a6a0a017d2cb46a600c682dff815ab802badf66c6526821aa05edea976f->leave($__internal_02d08a6a0a017d2cb46a600c682dff815ab802badf66c6526821aa05edea976f_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_d1be7eb9c652ffe6c295ba1993a0b7c6609aac12a1fe760057750d237e817915 = $this->env->getExtension("native_profiler");
        $__internal_d1be7eb9c652ffe6c295ba1993a0b7c6609aac12a1fe760057750d237e817915->enter($__internal_d1be7eb9c652ffe6c295ba1993a0b7c6609aac12a1fe760057750d237e817915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_d1be7eb9c652ffe6c295ba1993a0b7c6609aac12a1fe760057750d237e817915->leave($__internal_d1be7eb9c652ffe6c295ba1993a0b7c6609aac12a1fe760057750d237e817915_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e73016c29d43a6f1cbaf5bbbed1e3368ede59903a427005cd4847bd6350fac2e = $this->env->getExtension("native_profiler");
        $__internal_e73016c29d43a6f1cbaf5bbbed1e3368ede59903a427005cd4847bd6350fac2e->enter($__internal_e73016c29d43a6f1cbaf5bbbed1e3368ede59903a427005cd4847bd6350fac2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true)));
        
        $__internal_e73016c29d43a6f1cbaf5bbbed1e3368ede59903a427005cd4847bd6350fac2e->leave($__internal_e73016c29d43a6f1cbaf5bbbed1e3368ede59903a427005cd4847bd6350fac2e_prof);

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
/*     {% include ':article:article_content.html.twig' with {'show_content': true} %}*/
/* {% endblock %}*/
