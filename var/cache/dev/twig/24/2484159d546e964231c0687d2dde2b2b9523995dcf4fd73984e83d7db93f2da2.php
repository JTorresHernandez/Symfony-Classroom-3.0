<?php

/* :index:email.html.twig */
class __TwigTemplate_aba4f9b43a20c61dfe64b410470e46eec2d233f78cface87d9bb7d94b12b07dc extends Twig_Template
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
        $__internal_acf972f0617cb384fcb2b9ae816a4fa6df12f0dd45d015b0d6b32c2553a9c414 = $this->env->getExtension("native_profiler");
        $__internal_acf972f0617cb384fcb2b9ae816a4fa6df12f0dd45d015b0d6b32c2553a9c414->enter($__internal_acf972f0617cb384fcb2b9ae816a4fa6df12f0dd45d015b0d6b32c2553a9c414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acf972f0617cb384fcb2b9ae816a4fa6df12f0dd45d015b0d6b32c2553a9c414->leave($__internal_acf972f0617cb384fcb2b9ae816a4fa6df12f0dd45d015b0d6b32c2553a9c414_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10aaf6c8c8ab35f65cafee185ee434a3d7f7e8dfa5bb582ed2f88ff4375e5166 = $this->env->getExtension("native_profiler");
        $__internal_10aaf6c8c8ab35f65cafee185ee434a3d7f7e8dfa5bb582ed2f88ff4375e5166->enter($__internal_10aaf6c8c8ab35f65cafee185ee434a3d7f7e8dfa5bb582ed2f88ff4375e5166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_10aaf6c8c8ab35f65cafee185ee434a3d7f7e8dfa5bb582ed2f88ff4375e5166->leave($__internal_10aaf6c8c8ab35f65cafee185ee434a3d7f7e8dfa5bb582ed2f88ff4375e5166_prof);

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
