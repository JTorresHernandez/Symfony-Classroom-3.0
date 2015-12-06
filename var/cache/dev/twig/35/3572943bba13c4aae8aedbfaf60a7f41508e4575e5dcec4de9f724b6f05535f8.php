<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d1cd269c3ec15a2fe26f77e69903df9cb64dcd74f83e60087ec2940fb447f5a2 extends Twig_Template
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
        $__internal_7720d798e996d3d43995accf1458a2478f05309fac429b0e6b1e073a9a8dc5b6 = $this->env->getExtension("native_profiler");
        $__internal_7720d798e996d3d43995accf1458a2478f05309fac429b0e6b1e073a9a8dc5b6->enter($__internal_7720d798e996d3d43995accf1458a2478f05309fac429b0e6b1e073a9a8dc5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7720d798e996d3d43995accf1458a2478f05309fac429b0e6b1e073a9a8dc5b6->leave($__internal_7720d798e996d3d43995accf1458a2478f05309fac429b0e6b1e073a9a8dc5b6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bc2b99c8a4c2429780664cf93417092f970967d115a28581eaf53a2b23ce5e6c = $this->env->getExtension("native_profiler");
        $__internal_bc2b99c8a4c2429780664cf93417092f970967d115a28581eaf53a2b23ce5e6c->enter($__internal_bc2b99c8a4c2429780664cf93417092f970967d115a28581eaf53a2b23ce5e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bc2b99c8a4c2429780664cf93417092f970967d115a28581eaf53a2b23ce5e6c->leave($__internal_bc2b99c8a4c2429780664cf93417092f970967d115a28581eaf53a2b23ce5e6c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_28ce93036e9a41ade73fe0aa704a4949d76eaf20120b226856bb1f9d17c4ed66 = $this->env->getExtension("native_profiler");
        $__internal_28ce93036e9a41ade73fe0aa704a4949d76eaf20120b226856bb1f9d17c4ed66->enter($__internal_28ce93036e9a41ade73fe0aa704a4949d76eaf20120b226856bb1f9d17c4ed66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_28ce93036e9a41ade73fe0aa704a4949d76eaf20120b226856bb1f9d17c4ed66->leave($__internal_28ce93036e9a41ade73fe0aa704a4949d76eaf20120b226856bb1f9d17c4ed66_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7f67231e9a807c7b78e29ed092d7fad4249c3cc3a30c85f88f22ce0fa125c3f2 = $this->env->getExtension("native_profiler");
        $__internal_7f67231e9a807c7b78e29ed092d7fad4249c3cc3a30c85f88f22ce0fa125c3f2->enter($__internal_7f67231e9a807c7b78e29ed092d7fad4249c3cc3a30c85f88f22ce0fa125c3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7f67231e9a807c7b78e29ed092d7fad4249c3cc3a30c85f88f22ce0fa125c3f2->leave($__internal_7f67231e9a807c7b78e29ed092d7fad4249c3cc3a30c85f88f22ce0fa125c3f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
