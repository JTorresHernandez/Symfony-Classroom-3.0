<?php

/* :translator:index.html.twig */
class __TwigTemplate_96b5f2f39bc9a636355936db51425a6bcf33aa5988203da23d5b9315f504fb1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":translator:index.html.twig", 1);
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
        $__internal_f4b3e710738015c7bf6c234529b38deb7e43587f5168b60366e9164779c9a14b = $this->env->getExtension("native_profiler");
        $__internal_f4b3e710738015c7bf6c234529b38deb7e43587f5168b60366e9164779c9a14b->enter($__internal_f4b3e710738015c7bf6c234529b38deb7e43587f5168b60366e9164779c9a14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":translator:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4b3e710738015c7bf6c234529b38deb7e43587f5168b60366e9164779c9a14b->leave($__internal_f4b3e710738015c7bf6c234529b38deb7e43587f5168b60366e9164779c9a14b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dc13b9ce2b1972f894a45dc5143fcc95523eff3f8f7f24148608a841151eb75 = $this->env->getExtension("native_profiler");
        $__internal_0dc13b9ce2b1972f894a45dc5143fcc95523eff3f8f7f24148608a841151eb75->enter($__internal_0dc13b9ce2b1972f894a45dc5143fcc95523eff3f8f7f24148608a841151eb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <ul>
        <li>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.translator.index.msg1"), "html", null, true);
        echo "</li>
        <li>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.translator.index.msg2"), "html", null, true);
        echo "</li>
        <li>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.translator.index.msg3"), "html", null, true);
        echo "</li>
    </ul>
";
        
        $__internal_0dc13b9ce2b1972f894a45dc5143fcc95523eff3f8f7f24148608a841151eb75->leave($__internal_0dc13b9ce2b1972f894a45dc5143fcc95523eff3f8f7f24148608a841151eb75_prof);

    }

    public function getTemplateName()
    {
        return ":translator:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <ul>*/
/*         <li>{{ 'app.translator.index.msg1'|trans }}</li>*/
/*         <li>{{ 'app.translator.index.msg2'|trans }}</li>*/
/*         <li>{{ 'app.translator.index.msg3'|trans }}</li>*/
/*     </ul>*/
/* {% endblock %}*/
