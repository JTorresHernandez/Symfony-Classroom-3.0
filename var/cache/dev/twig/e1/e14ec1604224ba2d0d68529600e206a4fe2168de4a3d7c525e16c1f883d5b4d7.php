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
        $__internal_2c9dd9c747618e27b6e0ae0479040dda7e453d2f256c514b6045da2de284a33a = $this->env->getExtension("native_profiler");
        $__internal_2c9dd9c747618e27b6e0ae0479040dda7e453d2f256c514b6045da2de284a33a->enter($__internal_2c9dd9c747618e27b6e0ae0479040dda7e453d2f256c514b6045da2de284a33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2c9dd9c747618e27b6e0ae0479040dda7e453d2f256c514b6045da2de284a33a->leave($__internal_2c9dd9c747618e27b6e0ae0479040dda7e453d2f256c514b6045da2de284a33a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9ba80218e9c247c546c447970bdac41ba07f7a5db8f9faf99912f04c7d0fdd3a = $this->env->getExtension("native_profiler");
        $__internal_9ba80218e9c247c546c447970bdac41ba07f7a5db8f9faf99912f04c7d0fdd3a->enter($__internal_9ba80218e9c247c546c447970bdac41ba07f7a5db8f9faf99912f04c7d0fdd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9ba80218e9c247c546c447970bdac41ba07f7a5db8f9faf99912f04c7d0fdd3a->leave($__internal_9ba80218e9c247c546c447970bdac41ba07f7a5db8f9faf99912f04c7d0fdd3a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6464bec17047cd13ec75c748360fecafd9dd532a293deede6e2884ebf22b1c4c = $this->env->getExtension("native_profiler");
        $__internal_6464bec17047cd13ec75c748360fecafd9dd532a293deede6e2884ebf22b1c4c->enter($__internal_6464bec17047cd13ec75c748360fecafd9dd532a293deede6e2884ebf22b1c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6464bec17047cd13ec75c748360fecafd9dd532a293deede6e2884ebf22b1c4c->leave($__internal_6464bec17047cd13ec75c748360fecafd9dd532a293deede6e2884ebf22b1c4c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_471fc4f985abb951349115878aa5f8fb481d73f21500f75bf1e9dd715ddde01f = $this->env->getExtension("native_profiler");
        $__internal_471fc4f985abb951349115878aa5f8fb481d73f21500f75bf1e9dd715ddde01f->enter($__internal_471fc4f985abb951349115878aa5f8fb481d73f21500f75bf1e9dd715ddde01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_471fc4f985abb951349115878aa5f8fb481d73f21500f75bf1e9dd715ddde01f->leave($__internal_471fc4f985abb951349115878aa5f8fb481d73f21500f75bf1e9dd715ddde01f_prof);

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
