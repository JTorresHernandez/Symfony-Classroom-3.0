<?php

/* :article:article.html.twig */
class __TwigTemplate_46c0f60554b5be8fabdbcfbb9fb9664316580f67b7ccd6ac1e5dbd180b7b664f extends Twig_Template
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
        $__internal_9c44fbc1e92dcfe71cbae68d989a89cbe23aca6bfb2d0c2db045d141395b88c8 = $this->env->getExtension("native_profiler");
        $__internal_9c44fbc1e92dcfe71cbae68d989a89cbe23aca6bfb2d0c2db045d141395b88c8->enter($__internal_9c44fbc1e92dcfe71cbae68d989a89cbe23aca6bfb2d0c2db045d141395b88c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c44fbc1e92dcfe71cbae68d989a89cbe23aca6bfb2d0c2db045d141395b88c8->leave($__internal_9c44fbc1e92dcfe71cbae68d989a89cbe23aca6bfb2d0c2db045d141395b88c8_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_c3730da96603153d8659d903782b8aba0e2d4e356da5c06f8bd1472180f5c712 = $this->env->getExtension("native_profiler");
        $__internal_c3730da96603153d8659d903782b8aba0e2d4e356da5c06f8bd1472180f5c712->enter($__internal_c3730da96603153d8659d903782b8aba0e2d4e356da5c06f8bd1472180f5c712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_c3730da96603153d8659d903782b8aba0e2d4e356da5c06f8bd1472180f5c712->leave($__internal_c3730da96603153d8659d903782b8aba0e2d4e356da5c06f8bd1472180f5c712_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dda0e22572794a91ce56791afec019cd3bb1c68f33070b89cfef7c164016864 = $this->env->getExtension("native_profiler");
        $__internal_9dda0e22572794a91ce56791afec019cd3bb1c68f33070b89cfef7c164016864->enter($__internal_9dda0e22572794a91ce56791afec019cd3bb1c68f33070b89cfef7c164016864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true)));
        
        $__internal_9dda0e22572794a91ce56791afec019cd3bb1c68f33070b89cfef7c164016864->leave($__internal_9dda0e22572794a91ce56791afec019cd3bb1c68f33070b89cfef7c164016864_prof);

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
