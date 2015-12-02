<?php

/* :translator:test2.html.twig */
class __TwigTemplate_0cc746a2e1c980ad4bef0a7d1a21a9203d91791bc60279eb7e3591151db90c07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":translator:test2.html.twig", 1);
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
        $__internal_a2a6d5779406d17859756d0f5e75367a6b7a0265629351e890bf02134f69cc17 = $this->env->getExtension("native_profiler");
        $__internal_a2a6d5779406d17859756d0f5e75367a6b7a0265629351e890bf02134f69cc17->enter($__internal_a2a6d5779406d17859756d0f5e75367a6b7a0265629351e890bf02134f69cc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":translator:test2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a6d5779406d17859756d0f5e75367a6b7a0265629351e890bf02134f69cc17->leave($__internal_a2a6d5779406d17859756d0f5e75367a6b7a0265629351e890bf02134f69cc17_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27f818e4ca34b2401dfa4f2e2b4f024be73ae40500c057f7f670a281fb84f583 = $this->env->getExtension("native_profiler");
        $__internal_27f818e4ca34b2401dfa4f2e2b4f024be73ae40500c057f7f670a281fb84f583->enter($__internal_27f818e4ca34b2401dfa4f2e2b4f024be73ae40500c057f7f670a281fb84f583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <ul>
        <li>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("app.translator.test2.msg1", 0), "html", null, true);
        echo "</li>
        <li>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("app.translator.test2.msg2", 1, array("%name%" => "larry")), "html", null, true);
        echo "</li>
        <li>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("app.translator.test2.msg3", 2, array("%name%" => "larry")), "html", null, true);
        echo "</li>
        <li>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("app.translator.test2.msg4", 10, array("%name%" => "larry")), "html", null, true);
        echo "</li>
        <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("app.translator.test2.msg5", 20, array("%name%" => "larry")), "html", null, true);
        echo "</li>
        <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("app.translator.test2.msg6", 20, array("%name%" => "larry")), "html", null, true);
        echo "</li>
    </ul>
";
        
        $__internal_27f818e4ca34b2401dfa4f2e2b4f024be73ae40500c057f7f670a281fb84f583->leave($__internal_27f818e4ca34b2401dfa4f2e2b4f024be73ae40500c057f7f670a281fb84f583_prof);

    }

    public function getTemplateName()
    {
        return ":translator:test2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <ul>*/
/*         <li>{{ 'app.translator.test2.msg1'|transchoice(0) }}</li>*/
/*         <li>{{ 'app.translator.test2.msg2'|transchoice(1, {'%name%': 'larry'}) }}</li>*/
/*         <li>{{ 'app.translator.test2.msg3'|transchoice(2, {'%name%': 'larry'}) }}</li>*/
/*         <li>{{ 'app.translator.test2.msg4'|transchoice(10, {'%name%': 'larry'}) }}</li>*/
/*         <li>{{ 'app.translator.test2.msg5'|transchoice(20, {'%name%': 'larry'}) }}</li>*/
/*         <li>{{ 'app.translator.test2.msg6'|transchoice(20, {'%name%': 'larry'}) }}</li>*/
/*     </ul>*/
/* {% endblock %}*/
