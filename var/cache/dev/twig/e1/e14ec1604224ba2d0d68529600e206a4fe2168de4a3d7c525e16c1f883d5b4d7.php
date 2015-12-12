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
        $__internal_fee4941df08ac3e457a3740c349a03944d3ad661e8d4c6b1c6a0442433fdb3a0 = $this->env->getExtension("native_profiler");
        $__internal_fee4941df08ac3e457a3740c349a03944d3ad661e8d4c6b1c6a0442433fdb3a0->enter($__internal_fee4941df08ac3e457a3740c349a03944d3ad661e8d4c6b1c6a0442433fdb3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fee4941df08ac3e457a3740c349a03944d3ad661e8d4c6b1c6a0442433fdb3a0->leave($__internal_fee4941df08ac3e457a3740c349a03944d3ad661e8d4c6b1c6a0442433fdb3a0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a575e76d5f31ebfc1517092e13aae6ec3f006a54edf2931f29da12d98054a690 = $this->env->getExtension("native_profiler");
        $__internal_a575e76d5f31ebfc1517092e13aae6ec3f006a54edf2931f29da12d98054a690->enter($__internal_a575e76d5f31ebfc1517092e13aae6ec3f006a54edf2931f29da12d98054a690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a575e76d5f31ebfc1517092e13aae6ec3f006a54edf2931f29da12d98054a690->leave($__internal_a575e76d5f31ebfc1517092e13aae6ec3f006a54edf2931f29da12d98054a690_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c48e76c817087ebe8e13f04abd2dccfac92ce34ca9094c969c0b90c966dfbd08 = $this->env->getExtension("native_profiler");
        $__internal_c48e76c817087ebe8e13f04abd2dccfac92ce34ca9094c969c0b90c966dfbd08->enter($__internal_c48e76c817087ebe8e13f04abd2dccfac92ce34ca9094c969c0b90c966dfbd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c48e76c817087ebe8e13f04abd2dccfac92ce34ca9094c969c0b90c966dfbd08->leave($__internal_c48e76c817087ebe8e13f04abd2dccfac92ce34ca9094c969c0b90c966dfbd08_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_af37ac3501f61e4147877ac84fdbd92ea04e88976f8fad987b976c03492dd744 = $this->env->getExtension("native_profiler");
        $__internal_af37ac3501f61e4147877ac84fdbd92ea04e88976f8fad987b976c03492dd744->enter($__internal_af37ac3501f61e4147877ac84fdbd92ea04e88976f8fad987b976c03492dd744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_af37ac3501f61e4147877ac84fdbd92ea04e88976f8fad987b976c03492dd744->leave($__internal_af37ac3501f61e4147877ac84fdbd92ea04e88976f8fad987b976c03492dd744_prof);

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
