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
        $__internal_8771ffe734f1b3270701989aaa1dd0136d1e1c17867f3120b91f218d2e799881 = $this->env->getExtension("native_profiler");
        $__internal_8771ffe734f1b3270701989aaa1dd0136d1e1c17867f3120b91f218d2e799881->enter($__internal_8771ffe734f1b3270701989aaa1dd0136d1e1c17867f3120b91f218d2e799881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8771ffe734f1b3270701989aaa1dd0136d1e1c17867f3120b91f218d2e799881->leave($__internal_8771ffe734f1b3270701989aaa1dd0136d1e1c17867f3120b91f218d2e799881_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_897c97fdde81c719daae32951552618cc35fa2b871dde775fc84dc530ece455e = $this->env->getExtension("native_profiler");
        $__internal_897c97fdde81c719daae32951552618cc35fa2b871dde775fc84dc530ece455e->enter($__internal_897c97fdde81c719daae32951552618cc35fa2b871dde775fc84dc530ece455e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_897c97fdde81c719daae32951552618cc35fa2b871dde775fc84dc530ece455e->leave($__internal_897c97fdde81c719daae32951552618cc35fa2b871dde775fc84dc530ece455e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5e54055f3ad6591833507c79d1f5dffac8108a3f0e50e674d15d69cb743c20e = $this->env->getExtension("native_profiler");
        $__internal_b5e54055f3ad6591833507c79d1f5dffac8108a3f0e50e674d15d69cb743c20e->enter($__internal_b5e54055f3ad6591833507c79d1f5dffac8108a3f0e50e674d15d69cb743c20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_b5e54055f3ad6591833507c79d1f5dffac8108a3f0e50e674d15d69cb743c20e->leave($__internal_b5e54055f3ad6591833507c79d1f5dffac8108a3f0e50e674d15d69cb743c20e_prof);

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
