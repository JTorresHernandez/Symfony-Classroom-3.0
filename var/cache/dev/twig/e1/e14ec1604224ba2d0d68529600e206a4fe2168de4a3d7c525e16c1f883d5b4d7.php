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
        $__internal_6c852ad0a1f94a78b011e5c8573bf71eab00e9c96fb290d9dcdc584f09474a67 = $this->env->getExtension("native_profiler");
        $__internal_6c852ad0a1f94a78b011e5c8573bf71eab00e9c96fb290d9dcdc584f09474a67->enter($__internal_6c852ad0a1f94a78b011e5c8573bf71eab00e9c96fb290d9dcdc584f09474a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6c852ad0a1f94a78b011e5c8573bf71eab00e9c96fb290d9dcdc584f09474a67->leave($__internal_6c852ad0a1f94a78b011e5c8573bf71eab00e9c96fb290d9dcdc584f09474a67_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0dfe1982b3153971e0021b7f105ecae0fb1df2ddc32311fd03f79dae8c43767b = $this->env->getExtension("native_profiler");
        $__internal_0dfe1982b3153971e0021b7f105ecae0fb1df2ddc32311fd03f79dae8c43767b->enter($__internal_0dfe1982b3153971e0021b7f105ecae0fb1df2ddc32311fd03f79dae8c43767b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0dfe1982b3153971e0021b7f105ecae0fb1df2ddc32311fd03f79dae8c43767b->leave($__internal_0dfe1982b3153971e0021b7f105ecae0fb1df2ddc32311fd03f79dae8c43767b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a03c1fdffd6e5c206ab23b9307a333364615773d9c1856d4e49ab58a2b6dfe14 = $this->env->getExtension("native_profiler");
        $__internal_a03c1fdffd6e5c206ab23b9307a333364615773d9c1856d4e49ab58a2b6dfe14->enter($__internal_a03c1fdffd6e5c206ab23b9307a333364615773d9c1856d4e49ab58a2b6dfe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a03c1fdffd6e5c206ab23b9307a333364615773d9c1856d4e49ab58a2b6dfe14->leave($__internal_a03c1fdffd6e5c206ab23b9307a333364615773d9c1856d4e49ab58a2b6dfe14_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_faf64894438b618dd96be6c3d895903c827809f63ec2dac6bb8007c23b9ac034 = $this->env->getExtension("native_profiler");
        $__internal_faf64894438b618dd96be6c3d895903c827809f63ec2dac6bb8007c23b9ac034->enter($__internal_faf64894438b618dd96be6c3d895903c827809f63ec2dac6bb8007c23b9ac034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_faf64894438b618dd96be6c3d895903c827809f63ec2dac6bb8007c23b9ac034->leave($__internal_faf64894438b618dd96be6c3d895903c827809f63ec2dac6bb8007c23b9ac034_prof);

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
