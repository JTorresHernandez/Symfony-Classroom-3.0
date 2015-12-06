<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_365950ce2c5fb4b572a45bf7923667c1b97ee148487f7054d6d3b705de93ad2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle::layout.html.twig", 1);
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
        $__internal_ac37026b82d17546644e85c2b0dddc369131e053800de0bd02b3353c2958aef3 = $this->env->getExtension("native_profiler");
        $__internal_ac37026b82d17546644e85c2b0dddc369131e053800de0bd02b3353c2958aef3->enter($__internal_ac37026b82d17546644e85c2b0dddc369131e053800de0bd02b3353c2958aef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac37026b82d17546644e85c2b0dddc369131e053800de0bd02b3353c2958aef3->leave($__internal_ac37026b82d17546644e85c2b0dddc369131e053800de0bd02b3353c2958aef3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26f931f050b865e9065b9f3214fdb39f750b1a4bfe87f8a2571766e73529cbdb = $this->env->getExtension("native_profiler");
        $__internal_26f931f050b865e9065b9f3214fdb39f750b1a4bfe87f8a2571766e73529cbdb->enter($__internal_26f931f050b865e9065b9f3214fdb39f750b1a4bfe87f8a2571766e73529cbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_26f931f050b865e9065b9f3214fdb39f750b1a4bfe87f8a2571766e73529cbdb->leave($__internal_26f931f050b865e9065b9f3214fdb39f750b1a4bfe87f8a2571766e73529cbdb_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
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
/*     {{ block('fos_user_content') }}*/
/* {% endblock %}*/
/* */
/* */
