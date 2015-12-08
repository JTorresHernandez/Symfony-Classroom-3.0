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
        $__internal_592d6661d22a0b2ab3e357adda1c477825ead934c420acd172f331de534ce28c = $this->env->getExtension("native_profiler");
        $__internal_592d6661d22a0b2ab3e357adda1c477825ead934c420acd172f331de534ce28c->enter($__internal_592d6661d22a0b2ab3e357adda1c477825ead934c420acd172f331de534ce28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_592d6661d22a0b2ab3e357adda1c477825ead934c420acd172f331de534ce28c->leave($__internal_592d6661d22a0b2ab3e357adda1c477825ead934c420acd172f331de534ce28c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_82d22b7b8e8197ab62ad860e4c3db369119f25649d28abbfe9dfb9357e8a801b = $this->env->getExtension("native_profiler");
        $__internal_82d22b7b8e8197ab62ad860e4c3db369119f25649d28abbfe9dfb9357e8a801b->enter($__internal_82d22b7b8e8197ab62ad860e4c3db369119f25649d28abbfe9dfb9357e8a801b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_82d22b7b8e8197ab62ad860e4c3db369119f25649d28abbfe9dfb9357e8a801b->leave($__internal_82d22b7b8e8197ab62ad860e4c3db369119f25649d28abbfe9dfb9357e8a801b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_607e2022697a402ea284acb7105f8a5010d75d3803b20bb095850498b4346d73 = $this->env->getExtension("native_profiler");
        $__internal_607e2022697a402ea284acb7105f8a5010d75d3803b20bb095850498b4346d73->enter($__internal_607e2022697a402ea284acb7105f8a5010d75d3803b20bb095850498b4346d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_607e2022697a402ea284acb7105f8a5010d75d3803b20bb095850498b4346d73->leave($__internal_607e2022697a402ea284acb7105f8a5010d75d3803b20bb095850498b4346d73_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3036dfe354cae31fce1f7dfd36bd0f384726ba2f6d3e3f084b295520726c5115 = $this->env->getExtension("native_profiler");
        $__internal_3036dfe354cae31fce1f7dfd36bd0f384726ba2f6d3e3f084b295520726c5115->enter($__internal_3036dfe354cae31fce1f7dfd36bd0f384726ba2f6d3e3f084b295520726c5115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3036dfe354cae31fce1f7dfd36bd0f384726ba2f6d3e3f084b295520726c5115->leave($__internal_3036dfe354cae31fce1f7dfd36bd0f384726ba2f6d3e3f084b295520726c5115_prof);

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
