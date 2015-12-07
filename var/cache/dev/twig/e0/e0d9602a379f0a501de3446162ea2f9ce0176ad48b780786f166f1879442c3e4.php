<?php

/* :index:email.html.twig */
class __TwigTemplate_56ec7f86a54ceb0a9818116bda3f37994ed2c399321c53598d24d50f494c6fd5 extends Twig_Template
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
        $__internal_d77863aac47d6fd157d0234495ba5bd243b01e8115442e20c223dac3cbe88095 = $this->env->getExtension("native_profiler");
        $__internal_d77863aac47d6fd157d0234495ba5bd243b01e8115442e20c223dac3cbe88095->enter($__internal_d77863aac47d6fd157d0234495ba5bd243b01e8115442e20c223dac3cbe88095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d77863aac47d6fd157d0234495ba5bd243b01e8115442e20c223dac3cbe88095->leave($__internal_d77863aac47d6fd157d0234495ba5bd243b01e8115442e20c223dac3cbe88095_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_887a813696e7cb5b24dfb2781a91f57f46d854faeaa8d008b50020c943cf8199 = $this->env->getExtension("native_profiler");
        $__internal_887a813696e7cb5b24dfb2781a91f57f46d854faeaa8d008b50020c943cf8199->enter($__internal_887a813696e7cb5b24dfb2781a91f57f46d854faeaa8d008b50020c943cf8199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_887a813696e7cb5b24dfb2781a91f57f46d854faeaa8d008b50020c943cf8199->leave($__internal_887a813696e7cb5b24dfb2781a91f57f46d854faeaa8d008b50020c943cf8199_prof);

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
