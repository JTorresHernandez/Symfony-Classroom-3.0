<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_e98f5c7a92ef97d4d56403f3d2df2534365b542632ff9dff261f22d6294d228c extends Twig_Template
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
        $__internal_0be74bf1c8b0df17de668c322c9b4860a1aad163c6b94d0a86664024d8b14fa4 = $this->env->getExtension("native_profiler");
        $__internal_0be74bf1c8b0df17de668c322c9b4860a1aad163c6b94d0a86664024d8b14fa4->enter($__internal_0be74bf1c8b0df17de668c322c9b4860a1aad163c6b94d0a86664024d8b14fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0be74bf1c8b0df17de668c322c9b4860a1aad163c6b94d0a86664024d8b14fa4->leave($__internal_0be74bf1c8b0df17de668c322c9b4860a1aad163c6b94d0a86664024d8b14fa4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_541a2a712fd09d3faa2581189cd566d03c40ac4a0af0d2533e7e751a795cf5b3 = $this->env->getExtension("native_profiler");
        $__internal_541a2a712fd09d3faa2581189cd566d03c40ac4a0af0d2533e7e751a795cf5b3->enter($__internal_541a2a712fd09d3faa2581189cd566d03c40ac4a0af0d2533e7e751a795cf5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_541a2a712fd09d3faa2581189cd566d03c40ac4a0af0d2533e7e751a795cf5b3->leave($__internal_541a2a712fd09d3faa2581189cd566d03c40ac4a0af0d2533e7e751a795cf5b3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_34e6f9cf4ee0dcbaeefedd16a29823320f0680a2b415247ce75d683599c6b568 = $this->env->getExtension("native_profiler");
        $__internal_34e6f9cf4ee0dcbaeefedd16a29823320f0680a2b415247ce75d683599c6b568->enter($__internal_34e6f9cf4ee0dcbaeefedd16a29823320f0680a2b415247ce75d683599c6b568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_34e6f9cf4ee0dcbaeefedd16a29823320f0680a2b415247ce75d683599c6b568->leave($__internal_34e6f9cf4ee0dcbaeefedd16a29823320f0680a2b415247ce75d683599c6b568_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_46e50c00705fc076d7bb6b176d9dc6d14418ee9efc71317531124087c7b101a9 = $this->env->getExtension("native_profiler");
        $__internal_46e50c00705fc076d7bb6b176d9dc6d14418ee9efc71317531124087c7b101a9->enter($__internal_46e50c00705fc076d7bb6b176d9dc6d14418ee9efc71317531124087c7b101a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_46e50c00705fc076d7bb6b176d9dc6d14418ee9efc71317531124087c7b101a9->leave($__internal_46e50c00705fc076d7bb6b176d9dc6d14418ee9efc71317531124087c7b101a9_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:email.txt.twig";
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
