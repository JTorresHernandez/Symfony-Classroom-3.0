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
        $__internal_b9ad470e57ac786a9900c2ee27cdb0274a8b9d32e2fbfb1d5cc1c9e89bcefed7 = $this->env->getExtension("native_profiler");
        $__internal_b9ad470e57ac786a9900c2ee27cdb0274a8b9d32e2fbfb1d5cc1c9e89bcefed7->enter($__internal_b9ad470e57ac786a9900c2ee27cdb0274a8b9d32e2fbfb1d5cc1c9e89bcefed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9ad470e57ac786a9900c2ee27cdb0274a8b9d32e2fbfb1d5cc1c9e89bcefed7->leave($__internal_b9ad470e57ac786a9900c2ee27cdb0274a8b9d32e2fbfb1d5cc1c9e89bcefed7_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_6b157742532f476119cd21b25ee5224e97f7ada2bea5571e44586a1022835aa3 = $this->env->getExtension("native_profiler");
        $__internal_6b157742532f476119cd21b25ee5224e97f7ada2bea5571e44586a1022835aa3->enter($__internal_6b157742532f476119cd21b25ee5224e97f7ada2bea5571e44586a1022835aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_6b157742532f476119cd21b25ee5224e97f7ada2bea5571e44586a1022835aa3->leave($__internal_6b157742532f476119cd21b25ee5224e97f7ada2bea5571e44586a1022835aa3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc7ec3b0ac31b9a5013b6811859887a8aaa58770b44cd9361d0905769c5b023c = $this->env->getExtension("native_profiler");
        $__internal_cc7ec3b0ac31b9a5013b6811859887a8aaa58770b44cd9361d0905769c5b023c->enter($__internal_cc7ec3b0ac31b9a5013b6811859887a8aaa58770b44cd9361d0905769c5b023c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_cc7ec3b0ac31b9a5013b6811859887a8aaa58770b44cd9361d0905769c5b023c->leave($__internal_cc7ec3b0ac31b9a5013b6811859887a8aaa58770b44cd9361d0905769c5b023c_prof);

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
/*     {% include ':article:article_content.html.twig' with {'show_content': true, 'comments': comments} %}*/
/* {% endblock %}*/
