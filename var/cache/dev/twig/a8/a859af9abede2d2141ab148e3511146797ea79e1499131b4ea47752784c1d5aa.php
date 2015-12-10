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
        $__internal_bd2458b33b8455b0d41864555d5cbc9acedb0c4a195e31329e9c8449fddb760f = $this->env->getExtension("native_profiler");
        $__internal_bd2458b33b8455b0d41864555d5cbc9acedb0c4a195e31329e9c8449fddb760f->enter($__internal_bd2458b33b8455b0d41864555d5cbc9acedb0c4a195e31329e9c8449fddb760f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bd2458b33b8455b0d41864555d5cbc9acedb0c4a195e31329e9c8449fddb760f->leave($__internal_bd2458b33b8455b0d41864555d5cbc9acedb0c4a195e31329e9c8449fddb760f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e8b25c42096bb82da9ae91c46fcec63bb28f81d8b8522bf2980639e76ac9ec0a = $this->env->getExtension("native_profiler");
        $__internal_e8b25c42096bb82da9ae91c46fcec63bb28f81d8b8522bf2980639e76ac9ec0a->enter($__internal_e8b25c42096bb82da9ae91c46fcec63bb28f81d8b8522bf2980639e76ac9ec0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e8b25c42096bb82da9ae91c46fcec63bb28f81d8b8522bf2980639e76ac9ec0a->leave($__internal_e8b25c42096bb82da9ae91c46fcec63bb28f81d8b8522bf2980639e76ac9ec0a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d84458fe2c05e25e921f42e61020ea4c48456129fd8bcfdabd3e5b9a53e2e0f9 = $this->env->getExtension("native_profiler");
        $__internal_d84458fe2c05e25e921f42e61020ea4c48456129fd8bcfdabd3e5b9a53e2e0f9->enter($__internal_d84458fe2c05e25e921f42e61020ea4c48456129fd8bcfdabd3e5b9a53e2e0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d84458fe2c05e25e921f42e61020ea4c48456129fd8bcfdabd3e5b9a53e2e0f9->leave($__internal_d84458fe2c05e25e921f42e61020ea4c48456129fd8bcfdabd3e5b9a53e2e0f9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dd97a05dea9229b9a568385fed1929f07935bf01885576a2bc986be2725e6a05 = $this->env->getExtension("native_profiler");
        $__internal_dd97a05dea9229b9a568385fed1929f07935bf01885576a2bc986be2725e6a05->enter($__internal_dd97a05dea9229b9a568385fed1929f07935bf01885576a2bc986be2725e6a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dd97a05dea9229b9a568385fed1929f07935bf01885576a2bc986be2725e6a05->leave($__internal_dd97a05dea9229b9a568385fed1929f07935bf01885576a2bc986be2725e6a05_prof);

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
