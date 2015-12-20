<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_2e3ca63656c051a2e17379392cceb4de7f4513d3e78ae459a92583d25e1a0876 extends Twig_Template
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
        $__internal_aed11007896d17db0b687912bd0fd473fde9c9166c4dbf11410a67d924facc88 = $this->env->getExtension("native_profiler");
        $__internal_aed11007896d17db0b687912bd0fd473fde9c9166c4dbf11410a67d924facc88->enter($__internal_aed11007896d17db0b687912bd0fd473fde9c9166c4dbf11410a67d924facc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_aed11007896d17db0b687912bd0fd473fde9c9166c4dbf11410a67d924facc88->leave($__internal_aed11007896d17db0b687912bd0fd473fde9c9166c4dbf11410a67d924facc88_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d7db2f7325ca0b8d309b65fb042a5caaf8801f5b931b260b2da2f0d1422611b7 = $this->env->getExtension("native_profiler");
        $__internal_d7db2f7325ca0b8d309b65fb042a5caaf8801f5b931b260b2da2f0d1422611b7->enter($__internal_d7db2f7325ca0b8d309b65fb042a5caaf8801f5b931b260b2da2f0d1422611b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d7db2f7325ca0b8d309b65fb042a5caaf8801f5b931b260b2da2f0d1422611b7->leave($__internal_d7db2f7325ca0b8d309b65fb042a5caaf8801f5b931b260b2da2f0d1422611b7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_36ed0110c370a7fab2c80ffe230b2a0ab90bb6d8844c4a754032391a068a3e34 = $this->env->getExtension("native_profiler");
        $__internal_36ed0110c370a7fab2c80ffe230b2a0ab90bb6d8844c4a754032391a068a3e34->enter($__internal_36ed0110c370a7fab2c80ffe230b2a0ab90bb6d8844c4a754032391a068a3e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_36ed0110c370a7fab2c80ffe230b2a0ab90bb6d8844c4a754032391a068a3e34->leave($__internal_36ed0110c370a7fab2c80ffe230b2a0ab90bb6d8844c4a754032391a068a3e34_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bc587ef8e9dd3e7e8cc84346c6ca459e49848d2ffb66ab41abe413c98d79f8f9 = $this->env->getExtension("native_profiler");
        $__internal_bc587ef8e9dd3e7e8cc84346c6ca459e49848d2ffb66ab41abe413c98d79f8f9->enter($__internal_bc587ef8e9dd3e7e8cc84346c6ca459e49848d2ffb66ab41abe413c98d79f8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bc587ef8e9dd3e7e8cc84346c6ca459e49848d2ffb66ab41abe413c98d79f8f9->leave($__internal_bc587ef8e9dd3e7e8cc84346c6ca459e49848d2ffb66ab41abe413c98d79f8f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
