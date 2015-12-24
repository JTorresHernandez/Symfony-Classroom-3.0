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
        $__internal_c213173414391ca527a245bfefd87f40041da6a92c50f0477cd1d38480dce723 = $this->env->getExtension("native_profiler");
        $__internal_c213173414391ca527a245bfefd87f40041da6a92c50f0477cd1d38480dce723->enter($__internal_c213173414391ca527a245bfefd87f40041da6a92c50f0477cd1d38480dce723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c213173414391ca527a245bfefd87f40041da6a92c50f0477cd1d38480dce723->leave($__internal_c213173414391ca527a245bfefd87f40041da6a92c50f0477cd1d38480dce723_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_5eb40e51456a61a7451d0fff8f3769b763595d49b178ad04af4b83b34fe9c189 = $this->env->getExtension("native_profiler");
        $__internal_5eb40e51456a61a7451d0fff8f3769b763595d49b178ad04af4b83b34fe9c189->enter($__internal_5eb40e51456a61a7451d0fff8f3769b763595d49b178ad04af4b83b34fe9c189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_5eb40e51456a61a7451d0fff8f3769b763595d49b178ad04af4b83b34fe9c189->leave($__internal_5eb40e51456a61a7451d0fff8f3769b763595d49b178ad04af4b83b34fe9c189_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db2ab13183145022ca51fa5ba3cf99cd5e42341aca9024edca1da822102bde9a = $this->env->getExtension("native_profiler");
        $__internal_db2ab13183145022ca51fa5ba3cf99cd5e42341aca9024edca1da822102bde9a->enter($__internal_db2ab13183145022ca51fa5ba3cf99cd5e42341aca9024edca1da822102bde9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_db2ab13183145022ca51fa5ba3cf99cd5e42341aca9024edca1da822102bde9a->leave($__internal_db2ab13183145022ca51fa5ba3cf99cd5e42341aca9024edca1da822102bde9a_prof);

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
