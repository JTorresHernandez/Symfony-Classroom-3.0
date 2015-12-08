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
        $__internal_9641402706d6074192364b49848407bcc199fddbeeac9f9feeaf60708a4af3e1 = $this->env->getExtension("native_profiler");
        $__internal_9641402706d6074192364b49848407bcc199fddbeeac9f9feeaf60708a4af3e1->enter($__internal_9641402706d6074192364b49848407bcc199fddbeeac9f9feeaf60708a4af3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9641402706d6074192364b49848407bcc199fddbeeac9f9feeaf60708a4af3e1->leave($__internal_9641402706d6074192364b49848407bcc199fddbeeac9f9feeaf60708a4af3e1_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_c5e514ab17457e7b3363ef33c0e9b4ffa7cdf75cfae52477a3fcce3cea61d60f = $this->env->getExtension("native_profiler");
        $__internal_c5e514ab17457e7b3363ef33c0e9b4ffa7cdf75cfae52477a3fcce3cea61d60f->enter($__internal_c5e514ab17457e7b3363ef33c0e9b4ffa7cdf75cfae52477a3fcce3cea61d60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_c5e514ab17457e7b3363ef33c0e9b4ffa7cdf75cfae52477a3fcce3cea61d60f->leave($__internal_c5e514ab17457e7b3363ef33c0e9b4ffa7cdf75cfae52477a3fcce3cea61d60f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_433ab3396422b667528e5f1875a058b4ca6aa7dde7d884b2e873cbc06ecc26b8 = $this->env->getExtension("native_profiler");
        $__internal_433ab3396422b667528e5f1875a058b4ca6aa7dde7d884b2e873cbc06ecc26b8->enter($__internal_433ab3396422b667528e5f1875a058b4ca6aa7dde7d884b2e873cbc06ecc26b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true)));
        
        $__internal_433ab3396422b667528e5f1875a058b4ca6aa7dde7d884b2e873cbc06ecc26b8->leave($__internal_433ab3396422b667528e5f1875a058b4ca6aa7dde7d884b2e873cbc06ecc26b8_prof);

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
