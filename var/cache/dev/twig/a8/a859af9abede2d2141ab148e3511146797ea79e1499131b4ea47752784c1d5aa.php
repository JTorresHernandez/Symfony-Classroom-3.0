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
        $__internal_37cd38b9deda9bad94452e99b56f1bf532359a4ab14e2475a1537f253d650a19 = $this->env->getExtension("native_profiler");
        $__internal_37cd38b9deda9bad94452e99b56f1bf532359a4ab14e2475a1537f253d650a19->enter($__internal_37cd38b9deda9bad94452e99b56f1bf532359a4ab14e2475a1537f253d650a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_37cd38b9deda9bad94452e99b56f1bf532359a4ab14e2475a1537f253d650a19->leave($__internal_37cd38b9deda9bad94452e99b56f1bf532359a4ab14e2475a1537f253d650a19_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a97ea3fc8c209682257138b6d78ba17c9c903fd15931ca4a4980740c61f007d8 = $this->env->getExtension("native_profiler");
        $__internal_a97ea3fc8c209682257138b6d78ba17c9c903fd15931ca4a4980740c61f007d8->enter($__internal_a97ea3fc8c209682257138b6d78ba17c9c903fd15931ca4a4980740c61f007d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a97ea3fc8c209682257138b6d78ba17c9c903fd15931ca4a4980740c61f007d8->leave($__internal_a97ea3fc8c209682257138b6d78ba17c9c903fd15931ca4a4980740c61f007d8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_03c6cfc59d387227ca972741a3fed9b46a16d9e8d194489a5da4e5c996e05787 = $this->env->getExtension("native_profiler");
        $__internal_03c6cfc59d387227ca972741a3fed9b46a16d9e8d194489a5da4e5c996e05787->enter($__internal_03c6cfc59d387227ca972741a3fed9b46a16d9e8d194489a5da4e5c996e05787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_03c6cfc59d387227ca972741a3fed9b46a16d9e8d194489a5da4e5c996e05787->leave($__internal_03c6cfc59d387227ca972741a3fed9b46a16d9e8d194489a5da4e5c996e05787_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1c5065e4fcbf90d99192d9d7a5ad5b92b7d9c8131e4277c0f63924abd369e0b4 = $this->env->getExtension("native_profiler");
        $__internal_1c5065e4fcbf90d99192d9d7a5ad5b92b7d9c8131e4277c0f63924abd369e0b4->enter($__internal_1c5065e4fcbf90d99192d9d7a5ad5b92b7d9c8131e4277c0f63924abd369e0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1c5065e4fcbf90d99192d9d7a5ad5b92b7d9c8131e4277c0f63924abd369e0b4->leave($__internal_1c5065e4fcbf90d99192d9d7a5ad5b92b7d9c8131e4277c0f63924abd369e0b4_prof);

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
