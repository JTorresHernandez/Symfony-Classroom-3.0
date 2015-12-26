<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_2dd0d7a42704801856c61a06ae7b23af036e2c3f2ccb9f095413f436fec9fdd5 extends Twig_Template
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
        $__internal_50b2b0b22fc7db636542465d56baf3a30a7c847d74dea55cf9b50cc5935af34e = $this->env->getExtension("native_profiler");
        $__internal_50b2b0b22fc7db636542465d56baf3a30a7c847d74dea55cf9b50cc5935af34e->enter($__internal_50b2b0b22fc7db636542465d56baf3a30a7c847d74dea55cf9b50cc5935af34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_50b2b0b22fc7db636542465d56baf3a30a7c847d74dea55cf9b50cc5935af34e->leave($__internal_50b2b0b22fc7db636542465d56baf3a30a7c847d74dea55cf9b50cc5935af34e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6611cb740d1f5468871783a5b752e5c98ac837970ae2fc7cb89ba0a2daff6d53 = $this->env->getExtension("native_profiler");
        $__internal_6611cb740d1f5468871783a5b752e5c98ac837970ae2fc7cb89ba0a2daff6d53->enter($__internal_6611cb740d1f5468871783a5b752e5c98ac837970ae2fc7cb89ba0a2daff6d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6611cb740d1f5468871783a5b752e5c98ac837970ae2fc7cb89ba0a2daff6d53->leave($__internal_6611cb740d1f5468871783a5b752e5c98ac837970ae2fc7cb89ba0a2daff6d53_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_49d4836a578da105e4ede8b713526fc5070e30485bb98a415382808345945654 = $this->env->getExtension("native_profiler");
        $__internal_49d4836a578da105e4ede8b713526fc5070e30485bb98a415382808345945654->enter($__internal_49d4836a578da105e4ede8b713526fc5070e30485bb98a415382808345945654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_49d4836a578da105e4ede8b713526fc5070e30485bb98a415382808345945654->leave($__internal_49d4836a578da105e4ede8b713526fc5070e30485bb98a415382808345945654_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4487de5484312595d679a080ea722f64050c509df5afce001b7b1000d3af7d75 = $this->env->getExtension("native_profiler");
        $__internal_4487de5484312595d679a080ea722f64050c509df5afce001b7b1000d3af7d75->enter($__internal_4487de5484312595d679a080ea722f64050c509df5afce001b7b1000d3af7d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4487de5484312595d679a080ea722f64050c509df5afce001b7b1000d3af7d75->leave($__internal_4487de5484312595d679a080ea722f64050c509df5afce001b7b1000d3af7d75_prof);

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
