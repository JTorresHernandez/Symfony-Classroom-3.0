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
        $__internal_9cac06658ddd4da96825c05ba28a05e35d1b0e1f60d2f487568bfdb31d2214d2 = $this->env->getExtension("native_profiler");
        $__internal_9cac06658ddd4da96825c05ba28a05e35d1b0e1f60d2f487568bfdb31d2214d2->enter($__internal_9cac06658ddd4da96825c05ba28a05e35d1b0e1f60d2f487568bfdb31d2214d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cac06658ddd4da96825c05ba28a05e35d1b0e1f60d2f487568bfdb31d2214d2->leave($__internal_9cac06658ddd4da96825c05ba28a05e35d1b0e1f60d2f487568bfdb31d2214d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4979311e3b783bef0c0b658c20092e6fe999904e2b9db42fa66eb3ea36c09aa = $this->env->getExtension("native_profiler");
        $__internal_e4979311e3b783bef0c0b658c20092e6fe999904e2b9db42fa66eb3ea36c09aa->enter($__internal_e4979311e3b783bef0c0b658c20092e6fe999904e2b9db42fa66eb3ea36c09aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_e4979311e3b783bef0c0b658c20092e6fe999904e2b9db42fa66eb3ea36c09aa->leave($__internal_e4979311e3b783bef0c0b658c20092e6fe999904e2b9db42fa66eb3ea36c09aa_prof);

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
