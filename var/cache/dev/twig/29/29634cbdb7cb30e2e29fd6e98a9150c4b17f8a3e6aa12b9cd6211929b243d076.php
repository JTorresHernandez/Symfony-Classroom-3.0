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
        $__internal_c2cec2fc40497e29a861dc8fd2c78dde8c34c77f0b0df07ea6d4c825ae017f38 = $this->env->getExtension("native_profiler");
        $__internal_c2cec2fc40497e29a861dc8fd2c78dde8c34c77f0b0df07ea6d4c825ae017f38->enter($__internal_c2cec2fc40497e29a861dc8fd2c78dde8c34c77f0b0df07ea6d4c825ae017f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c2cec2fc40497e29a861dc8fd2c78dde8c34c77f0b0df07ea6d4c825ae017f38->leave($__internal_c2cec2fc40497e29a861dc8fd2c78dde8c34c77f0b0df07ea6d4c825ae017f38_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2375a3717c4f282671cf74f2d7b2993502e77c4a6207f4a424c1eb1af59d6b08 = $this->env->getExtension("native_profiler");
        $__internal_2375a3717c4f282671cf74f2d7b2993502e77c4a6207f4a424c1eb1af59d6b08->enter($__internal_2375a3717c4f282671cf74f2d7b2993502e77c4a6207f4a424c1eb1af59d6b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2375a3717c4f282671cf74f2d7b2993502e77c4a6207f4a424c1eb1af59d6b08->leave($__internal_2375a3717c4f282671cf74f2d7b2993502e77c4a6207f4a424c1eb1af59d6b08_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_adf15fc7f8b7652769452370183256aff96855a008b4b1cb56d296d9191d3bba = $this->env->getExtension("native_profiler");
        $__internal_adf15fc7f8b7652769452370183256aff96855a008b4b1cb56d296d9191d3bba->enter($__internal_adf15fc7f8b7652769452370183256aff96855a008b4b1cb56d296d9191d3bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_adf15fc7f8b7652769452370183256aff96855a008b4b1cb56d296d9191d3bba->leave($__internal_adf15fc7f8b7652769452370183256aff96855a008b4b1cb56d296d9191d3bba_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_962bc4d364ade3fd3cf4342722206d7601d2d5647f5943186ebd6b73fd623ea8 = $this->env->getExtension("native_profiler");
        $__internal_962bc4d364ade3fd3cf4342722206d7601d2d5647f5943186ebd6b73fd623ea8->enter($__internal_962bc4d364ade3fd3cf4342722206d7601d2d5647f5943186ebd6b73fd623ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_962bc4d364ade3fd3cf4342722206d7601d2d5647f5943186ebd6b73fd623ea8->leave($__internal_962bc4d364ade3fd3cf4342722206d7601d2d5647f5943186ebd6b73fd623ea8_prof);

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
