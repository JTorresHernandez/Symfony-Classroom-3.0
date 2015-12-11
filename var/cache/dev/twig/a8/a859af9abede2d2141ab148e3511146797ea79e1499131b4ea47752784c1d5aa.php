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
        $__internal_5610050191d33e09fbb5ed05396c5450c4ec2633ed9a00be1e2c8d561c4a1e2b = $this->env->getExtension("native_profiler");
        $__internal_5610050191d33e09fbb5ed05396c5450c4ec2633ed9a00be1e2c8d561c4a1e2b->enter($__internal_5610050191d33e09fbb5ed05396c5450c4ec2633ed9a00be1e2c8d561c4a1e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5610050191d33e09fbb5ed05396c5450c4ec2633ed9a00be1e2c8d561c4a1e2b->leave($__internal_5610050191d33e09fbb5ed05396c5450c4ec2633ed9a00be1e2c8d561c4a1e2b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9209b92d905f46ddce286c1b3d70a8ad368d35f17eae2cd7e8e1b8804d56d1e7 = $this->env->getExtension("native_profiler");
        $__internal_9209b92d905f46ddce286c1b3d70a8ad368d35f17eae2cd7e8e1b8804d56d1e7->enter($__internal_9209b92d905f46ddce286c1b3d70a8ad368d35f17eae2cd7e8e1b8804d56d1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_9209b92d905f46ddce286c1b3d70a8ad368d35f17eae2cd7e8e1b8804d56d1e7->leave($__internal_9209b92d905f46ddce286c1b3d70a8ad368d35f17eae2cd7e8e1b8804d56d1e7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a077d7913b82a3e601be30b11496c208dcdd654228d0c199ddeb06085eef6039 = $this->env->getExtension("native_profiler");
        $__internal_a077d7913b82a3e601be30b11496c208dcdd654228d0c199ddeb06085eef6039->enter($__internal_a077d7913b82a3e601be30b11496c208dcdd654228d0c199ddeb06085eef6039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a077d7913b82a3e601be30b11496c208dcdd654228d0c199ddeb06085eef6039->leave($__internal_a077d7913b82a3e601be30b11496c208dcdd654228d0c199ddeb06085eef6039_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9ba287c4df3662200a4e7e04ca2f59ec78668b1479734e15e814497415f7ac5d = $this->env->getExtension("native_profiler");
        $__internal_9ba287c4df3662200a4e7e04ca2f59ec78668b1479734e15e814497415f7ac5d->enter($__internal_9ba287c4df3662200a4e7e04ca2f59ec78668b1479734e15e814497415f7ac5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9ba287c4df3662200a4e7e04ca2f59ec78668b1479734e15e814497415f7ac5d->leave($__internal_9ba287c4df3662200a4e7e04ca2f59ec78668b1479734e15e814497415f7ac5d_prof);

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
