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
        $__internal_8e69cd2a5f04af100dc1cc45e81d4f759653c8ed6fdf161fc518689c95f3a426 = $this->env->getExtension("native_profiler");
        $__internal_8e69cd2a5f04af100dc1cc45e81d4f759653c8ed6fdf161fc518689c95f3a426->enter($__internal_8e69cd2a5f04af100dc1cc45e81d4f759653c8ed6fdf161fc518689c95f3a426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8e69cd2a5f04af100dc1cc45e81d4f759653c8ed6fdf161fc518689c95f3a426->leave($__internal_8e69cd2a5f04af100dc1cc45e81d4f759653c8ed6fdf161fc518689c95f3a426_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dde230bf9c9546c368db9c86c834c3555fcac731f3e7ea35a8d06d36262469dd = $this->env->getExtension("native_profiler");
        $__internal_dde230bf9c9546c368db9c86c834c3555fcac731f3e7ea35a8d06d36262469dd->enter($__internal_dde230bf9c9546c368db9c86c834c3555fcac731f3e7ea35a8d06d36262469dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dde230bf9c9546c368db9c86c834c3555fcac731f3e7ea35a8d06d36262469dd->leave($__internal_dde230bf9c9546c368db9c86c834c3555fcac731f3e7ea35a8d06d36262469dd_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fa952ffba6f56124fa0bee1fd4150bbccb0b0d8bd1ec4804259120ae82e8c99d = $this->env->getExtension("native_profiler");
        $__internal_fa952ffba6f56124fa0bee1fd4150bbccb0b0d8bd1ec4804259120ae82e8c99d->enter($__internal_fa952ffba6f56124fa0bee1fd4150bbccb0b0d8bd1ec4804259120ae82e8c99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fa952ffba6f56124fa0bee1fd4150bbccb0b0d8bd1ec4804259120ae82e8c99d->leave($__internal_fa952ffba6f56124fa0bee1fd4150bbccb0b0d8bd1ec4804259120ae82e8c99d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d2477fbe628ea49ba859ccdb639847277453f2d1b12bbbedd2f87f05aa819590 = $this->env->getExtension("native_profiler");
        $__internal_d2477fbe628ea49ba859ccdb639847277453f2d1b12bbbedd2f87f05aa819590->enter($__internal_d2477fbe628ea49ba859ccdb639847277453f2d1b12bbbedd2f87f05aa819590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d2477fbe628ea49ba859ccdb639847277453f2d1b12bbbedd2f87f05aa819590->leave($__internal_d2477fbe628ea49ba859ccdb639847277453f2d1b12bbbedd2f87f05aa819590_prof);

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
