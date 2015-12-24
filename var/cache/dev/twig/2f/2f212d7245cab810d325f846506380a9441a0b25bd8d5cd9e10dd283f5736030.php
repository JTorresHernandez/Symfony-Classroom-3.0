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
        $__internal_d3d837960fed579f8a8983bcc747ae4992e15f6c4b0f6f31a7d783e1c859d9a1 = $this->env->getExtension("native_profiler");
        $__internal_d3d837960fed579f8a8983bcc747ae4992e15f6c4b0f6f31a7d783e1c859d9a1->enter($__internal_d3d837960fed579f8a8983bcc747ae4992e15f6c4b0f6f31a7d783e1c859d9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d3d837960fed579f8a8983bcc747ae4992e15f6c4b0f6f31a7d783e1c859d9a1->leave($__internal_d3d837960fed579f8a8983bcc747ae4992e15f6c4b0f6f31a7d783e1c859d9a1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3d05131fbc441fcbd76fd29e71a8ff92546e91b7c4387258cb14f20c180026f6 = $this->env->getExtension("native_profiler");
        $__internal_3d05131fbc441fcbd76fd29e71a8ff92546e91b7c4387258cb14f20c180026f6->enter($__internal_3d05131fbc441fcbd76fd29e71a8ff92546e91b7c4387258cb14f20c180026f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3d05131fbc441fcbd76fd29e71a8ff92546e91b7c4387258cb14f20c180026f6->leave($__internal_3d05131fbc441fcbd76fd29e71a8ff92546e91b7c4387258cb14f20c180026f6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_47999dda258916bcd7b408b5a4ab9aa3e507187df8ff44ea49d51385af8cd059 = $this->env->getExtension("native_profiler");
        $__internal_47999dda258916bcd7b408b5a4ab9aa3e507187df8ff44ea49d51385af8cd059->enter($__internal_47999dda258916bcd7b408b5a4ab9aa3e507187df8ff44ea49d51385af8cd059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_47999dda258916bcd7b408b5a4ab9aa3e507187df8ff44ea49d51385af8cd059->leave($__internal_47999dda258916bcd7b408b5a4ab9aa3e507187df8ff44ea49d51385af8cd059_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_94392354507a55b939f3a75390bac1d4105c1fc760eea53b65b389bb5b7fe18d = $this->env->getExtension("native_profiler");
        $__internal_94392354507a55b939f3a75390bac1d4105c1fc760eea53b65b389bb5b7fe18d->enter($__internal_94392354507a55b939f3a75390bac1d4105c1fc760eea53b65b389bb5b7fe18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_94392354507a55b939f3a75390bac1d4105c1fc760eea53b65b389bb5b7fe18d->leave($__internal_94392354507a55b939f3a75390bac1d4105c1fc760eea53b65b389bb5b7fe18d_prof);

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
