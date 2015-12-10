<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_99038c4ef815991eaf5b9d13482c0d1abe48f1decd8227d0b3cde38198661a02 extends Twig_Template
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
        $__internal_18ee0c05fc53f9e2b44b4a36d8346d2b444d49788bc242941493a7cd52ba0127 = $this->env->getExtension("native_profiler");
        $__internal_18ee0c05fc53f9e2b44b4a36d8346d2b444d49788bc242941493a7cd52ba0127->enter($__internal_18ee0c05fc53f9e2b44b4a36d8346d2b444d49788bc242941493a7cd52ba0127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_18ee0c05fc53f9e2b44b4a36d8346d2b444d49788bc242941493a7cd52ba0127->leave($__internal_18ee0c05fc53f9e2b44b4a36d8346d2b444d49788bc242941493a7cd52ba0127_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_63a5f555cd590c84fb4dd61e48171444a1e10f4544d6b62c5eb438f187e81506 = $this->env->getExtension("native_profiler");
        $__internal_63a5f555cd590c84fb4dd61e48171444a1e10f4544d6b62c5eb438f187e81506->enter($__internal_63a5f555cd590c84fb4dd61e48171444a1e10f4544d6b62c5eb438f187e81506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_63a5f555cd590c84fb4dd61e48171444a1e10f4544d6b62c5eb438f187e81506->leave($__internal_63a5f555cd590c84fb4dd61e48171444a1e10f4544d6b62c5eb438f187e81506_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4dd52fdeb4acb34f84a8bbaaf38cdcc2553eb06b2764b46b7563e5b02fefdc42 = $this->env->getExtension("native_profiler");
        $__internal_4dd52fdeb4acb34f84a8bbaaf38cdcc2553eb06b2764b46b7563e5b02fefdc42->enter($__internal_4dd52fdeb4acb34f84a8bbaaf38cdcc2553eb06b2764b46b7563e5b02fefdc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4dd52fdeb4acb34f84a8bbaaf38cdcc2553eb06b2764b46b7563e5b02fefdc42->leave($__internal_4dd52fdeb4acb34f84a8bbaaf38cdcc2553eb06b2764b46b7563e5b02fefdc42_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2630be330e6c37c806ced6113dbd56d757139507c8ef8ab88f59fecc334dbfdf = $this->env->getExtension("native_profiler");
        $__internal_2630be330e6c37c806ced6113dbd56d757139507c8ef8ab88f59fecc334dbfdf->enter($__internal_2630be330e6c37c806ced6113dbd56d757139507c8ef8ab88f59fecc334dbfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2630be330e6c37c806ced6113dbd56d757139507c8ef8ab88f59fecc334dbfdf->leave($__internal_2630be330e6c37c806ced6113dbd56d757139507c8ef8ab88f59fecc334dbfdf_prof);

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
