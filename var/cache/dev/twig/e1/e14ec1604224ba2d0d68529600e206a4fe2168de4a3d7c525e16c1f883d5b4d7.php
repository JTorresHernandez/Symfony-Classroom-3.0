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
        $__internal_f422bcc4731151f28ec3e7a501316a04dbaeed3de5c79517262f61a742589de1 = $this->env->getExtension("native_profiler");
        $__internal_f422bcc4731151f28ec3e7a501316a04dbaeed3de5c79517262f61a742589de1->enter($__internal_f422bcc4731151f28ec3e7a501316a04dbaeed3de5c79517262f61a742589de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f422bcc4731151f28ec3e7a501316a04dbaeed3de5c79517262f61a742589de1->leave($__internal_f422bcc4731151f28ec3e7a501316a04dbaeed3de5c79517262f61a742589de1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_04e98c9ac199d3746d786c6eca27127770679e8a82e8e87fd94421799055a11a = $this->env->getExtension("native_profiler");
        $__internal_04e98c9ac199d3746d786c6eca27127770679e8a82e8e87fd94421799055a11a->enter($__internal_04e98c9ac199d3746d786c6eca27127770679e8a82e8e87fd94421799055a11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_04e98c9ac199d3746d786c6eca27127770679e8a82e8e87fd94421799055a11a->leave($__internal_04e98c9ac199d3746d786c6eca27127770679e8a82e8e87fd94421799055a11a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9fa3d0a56566e797e905fcaab446273d305236d142428cd3920980e6eb514011 = $this->env->getExtension("native_profiler");
        $__internal_9fa3d0a56566e797e905fcaab446273d305236d142428cd3920980e6eb514011->enter($__internal_9fa3d0a56566e797e905fcaab446273d305236d142428cd3920980e6eb514011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9fa3d0a56566e797e905fcaab446273d305236d142428cd3920980e6eb514011->leave($__internal_9fa3d0a56566e797e905fcaab446273d305236d142428cd3920980e6eb514011_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_df753c9fea0385b871b43a842306ab1c5f5b6ee46eee2ae9dbe793b456bd93ac = $this->env->getExtension("native_profiler");
        $__internal_df753c9fea0385b871b43a842306ab1c5f5b6ee46eee2ae9dbe793b456bd93ac->enter($__internal_df753c9fea0385b871b43a842306ab1c5f5b6ee46eee2ae9dbe793b456bd93ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_df753c9fea0385b871b43a842306ab1c5f5b6ee46eee2ae9dbe793b456bd93ac->leave($__internal_df753c9fea0385b871b43a842306ab1c5f5b6ee46eee2ae9dbe793b456bd93ac_prof);

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
