<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_85291f82440eae9c3dc937d418684de7c33fe1b25f3ce2116fb3588d06de2a31 extends Twig_Template
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
        $__internal_05e4bf43fd4373432b5aaee60f908d9a7eb251c4839d84d3129c3305e7327cc2 = $this->env->getExtension("native_profiler");
        $__internal_05e4bf43fd4373432b5aaee60f908d9a7eb251c4839d84d3129c3305e7327cc2->enter($__internal_05e4bf43fd4373432b5aaee60f908d9a7eb251c4839d84d3129c3305e7327cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_05e4bf43fd4373432b5aaee60f908d9a7eb251c4839d84d3129c3305e7327cc2->leave($__internal_05e4bf43fd4373432b5aaee60f908d9a7eb251c4839d84d3129c3305e7327cc2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c049c3a2e3d943c86da0b1ec97689a5cea7c24612ba13eff19bb0dc04283a793 = $this->env->getExtension("native_profiler");
        $__internal_c049c3a2e3d943c86da0b1ec97689a5cea7c24612ba13eff19bb0dc04283a793->enter($__internal_c049c3a2e3d943c86da0b1ec97689a5cea7c24612ba13eff19bb0dc04283a793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c049c3a2e3d943c86da0b1ec97689a5cea7c24612ba13eff19bb0dc04283a793->leave($__internal_c049c3a2e3d943c86da0b1ec97689a5cea7c24612ba13eff19bb0dc04283a793_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_75b8a72fd86c7672032d8684371c155161e19641a94fe27fe93629d153105df1 = $this->env->getExtension("native_profiler");
        $__internal_75b8a72fd86c7672032d8684371c155161e19641a94fe27fe93629d153105df1->enter($__internal_75b8a72fd86c7672032d8684371c155161e19641a94fe27fe93629d153105df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_75b8a72fd86c7672032d8684371c155161e19641a94fe27fe93629d153105df1->leave($__internal_75b8a72fd86c7672032d8684371c155161e19641a94fe27fe93629d153105df1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2b9640b92b9c3a6f0609f7530fbd6878e4d7fb3b277ae1b6740a65dd08242e55 = $this->env->getExtension("native_profiler");
        $__internal_2b9640b92b9c3a6f0609f7530fbd6878e4d7fb3b277ae1b6740a65dd08242e55->enter($__internal_2b9640b92b9c3a6f0609f7530fbd6878e4d7fb3b277ae1b6740a65dd08242e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2b9640b92b9c3a6f0609f7530fbd6878e4d7fb3b277ae1b6740a65dd08242e55->leave($__internal_2b9640b92b9c3a6f0609f7530fbd6878e4d7fb3b277ae1b6740a65dd08242e55_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:email.txt.twig";
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
