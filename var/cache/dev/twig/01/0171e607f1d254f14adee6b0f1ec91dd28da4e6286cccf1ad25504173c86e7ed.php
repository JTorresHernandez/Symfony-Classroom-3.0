<?php

/* :calculator:form.html.twig */
class __TwigTemplate_9ba803932a210d05664a2fb03b4b796081db33db7ea0c164550b0f175b4d6ab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":calculator:form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ed29b6550496130528c4abf8dfe9c7448b1650e1ca864aaaadd870af363987c = $this->env->getExtension("native_profiler");
        $__internal_0ed29b6550496130528c4abf8dfe9c7448b1650e1ca864aaaadd870af363987c->enter($__internal_0ed29b6550496130528c4abf8dfe9c7448b1650e1ca864aaaadd870af363987c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":calculator:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ed29b6550496130528c4abf8dfe9c7448b1650e1ca864aaaadd870af363987c->leave($__internal_0ed29b6550496130528c4abf8dfe9c7448b1650e1ca864aaaadd870af363987c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39617c24797c570f867b67b328a726fab50d4e4eb8c326f8ec8d565f46527a19 = $this->env->getExtension("native_profiler");
        $__internal_39617c24797c570f867b67b328a726fab50d4e4eb8c326f8ec8d565f46527a19->enter($__internal_39617c24797c570f867b67b328a726fab50d4e4eb8c326f8ec8d565f46527a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Form";
        
        $__internal_39617c24797c570f867b67b328a726fab50d4e4eb8c326f8ec8d565f46527a19->leave($__internal_39617c24797c570f867b67b328a726fab50d4e4eb8c326f8ec8d565f46527a19_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_38d01acb1a0276281888a83dcd3a5f503681937e03ff45a1f9d443df897b5450 = $this->env->getExtension("native_profiler");
        $__internal_38d01acb1a0276281888a83dcd3a5f503681937e03ff45a1f9d443df897b5450->enter($__internal_38d01acb1a0276281888a83dcd3a5f503681937e03ff45a1f9d443df897b5450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")));
        echo "\" method=\"post\">
        Op1 <input type=\"number\" name=\"op1\" placeholder=\"An integer\"><br>
        Op2 <input type=\"number\" name=\"op2\" placeholder=\"An integer\"><br>
        <input type=\"submit\" value=\"Ok\">
    </form>
";
        
        $__internal_38d01acb1a0276281888a83dcd3a5f503681937e03ff45a1f9d443df897b5450->leave($__internal_38d01acb1a0276281888a83dcd3a5f503681937e03ff45a1f9d443df897b5450_prof);

    }

    public function getTemplateName()
    {
        return ":calculator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}Form{% endblock %}*/
/* */
/* {% block body %}*/
/*     <form action="{{ path(action) }}" method="post">*/
/*         Op1 <input type="number" name="op1" placeholder="An integer"><br>*/
/*         Op2 <input type="number" name="op2" placeholder="An integer"><br>*/
/*         <input type="submit" value="Ok">*/
/*     </form>*/
/* {% endblock %}*/
/* */
