<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_02e836552a519dcf2581364cbdbd72c44b95b4b771927d881c60d81b95481839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91146307685210bb535447168dfcb3b3b3cda7204a73afc6a7462ae45285d649 = $this->env->getExtension("native_profiler");
        $__internal_91146307685210bb535447168dfcb3b3b3cda7204a73afc6a7462ae45285d649->enter($__internal_91146307685210bb535447168dfcb3b3b3cda7204a73afc6a7462ae45285d649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_91146307685210bb535447168dfcb3b3b3cda7204a73afc6a7462ae45285d649->leave($__internal_91146307685210bb535447168dfcb3b3b3cda7204a73afc6a7462ae45285d649_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b9c1f27a3f80d3f2ad73293be688c438f73bb2b8a962051de4ddccb5a6bbc06a = $this->env->getExtension("native_profiler");
        $__internal_b9c1f27a3f80d3f2ad73293be688c438f73bb2b8a962051de4ddccb5a6bbc06a->enter($__internal_b9c1f27a3f80d3f2ad73293be688c438f73bb2b8a962051de4ddccb5a6bbc06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b9c1f27a3f80d3f2ad73293be688c438f73bb2b8a962051de4ddccb5a6bbc06a->leave($__internal_b9c1f27a3f80d3f2ad73293be688c438f73bb2b8a962051de4ddccb5a6bbc06a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3283ebfd076fb9e59fcd5b5a1ef9a7a429809c833fd40dd032921d11fd805e37 = $this->env->getExtension("native_profiler");
        $__internal_3283ebfd076fb9e59fcd5b5a1ef9a7a429809c833fd40dd032921d11fd805e37->enter($__internal_3283ebfd076fb9e59fcd5b5a1ef9a7a429809c833fd40dd032921d11fd805e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3283ebfd076fb9e59fcd5b5a1ef9a7a429809c833fd40dd032921d11fd805e37->leave($__internal_3283ebfd076fb9e59fcd5b5a1ef9a7a429809c833fd40dd032921d11fd805e37_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ff80a266c43deac5442d9eac0d818a036ca4343097e62edf43c1daa82cee7962 = $this->env->getExtension("native_profiler");
        $__internal_ff80a266c43deac5442d9eac0d818a036ca4343097e62edf43c1daa82cee7962->enter($__internal_ff80a266c43deac5442d9eac0d818a036ca4343097e62edf43c1daa82cee7962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ff80a266c43deac5442d9eac0d818a036ca4343097e62edf43c1daa82cee7962->leave($__internal_ff80a266c43deac5442d9eac0d818a036ca4343097e62edf43c1daa82cee7962_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
