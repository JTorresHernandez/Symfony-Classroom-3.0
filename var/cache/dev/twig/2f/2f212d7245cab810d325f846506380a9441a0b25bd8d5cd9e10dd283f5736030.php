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
        $__internal_7635de7f5e66a74e08eebfc73ecd1ecb1ffef0e688155f1612d331357ad81d3c = $this->env->getExtension("native_profiler");
        $__internal_7635de7f5e66a74e08eebfc73ecd1ecb1ffef0e688155f1612d331357ad81d3c->enter($__internal_7635de7f5e66a74e08eebfc73ecd1ecb1ffef0e688155f1612d331357ad81d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7635de7f5e66a74e08eebfc73ecd1ecb1ffef0e688155f1612d331357ad81d3c->leave($__internal_7635de7f5e66a74e08eebfc73ecd1ecb1ffef0e688155f1612d331357ad81d3c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_35b745476f7e5e42dde35c1df826b4b750185d127074ae98e1f587ad0c15b857 = $this->env->getExtension("native_profiler");
        $__internal_35b745476f7e5e42dde35c1df826b4b750185d127074ae98e1f587ad0c15b857->enter($__internal_35b745476f7e5e42dde35c1df826b4b750185d127074ae98e1f587ad0c15b857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_35b745476f7e5e42dde35c1df826b4b750185d127074ae98e1f587ad0c15b857->leave($__internal_35b745476f7e5e42dde35c1df826b4b750185d127074ae98e1f587ad0c15b857_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ac15ce60152fff52016a2965c79725f54adaef49fa467f8d16c49acd6556e840 = $this->env->getExtension("native_profiler");
        $__internal_ac15ce60152fff52016a2965c79725f54adaef49fa467f8d16c49acd6556e840->enter($__internal_ac15ce60152fff52016a2965c79725f54adaef49fa467f8d16c49acd6556e840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ac15ce60152fff52016a2965c79725f54adaef49fa467f8d16c49acd6556e840->leave($__internal_ac15ce60152fff52016a2965c79725f54adaef49fa467f8d16c49acd6556e840_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3b5c4836b728f16f6818ae65763b3de189bd2b9efb04c4000ef2d22a0e3980e6 = $this->env->getExtension("native_profiler");
        $__internal_3b5c4836b728f16f6818ae65763b3de189bd2b9efb04c4000ef2d22a0e3980e6->enter($__internal_3b5c4836b728f16f6818ae65763b3de189bd2b9efb04c4000ef2d22a0e3980e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3b5c4836b728f16f6818ae65763b3de189bd2b9efb04c4000ef2d22a0e3980e6->leave($__internal_3b5c4836b728f16f6818ae65763b3de189bd2b9efb04c4000ef2d22a0e3980e6_prof);

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
