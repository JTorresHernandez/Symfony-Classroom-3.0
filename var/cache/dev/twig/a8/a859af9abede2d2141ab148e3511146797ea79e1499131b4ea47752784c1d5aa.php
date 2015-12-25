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
        $__internal_734e7123439ab1b14b4af26dd843f5b8b481cea61b3102f0517baa3f94ba461e = $this->env->getExtension("native_profiler");
        $__internal_734e7123439ab1b14b4af26dd843f5b8b481cea61b3102f0517baa3f94ba461e->enter($__internal_734e7123439ab1b14b4af26dd843f5b8b481cea61b3102f0517baa3f94ba461e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_734e7123439ab1b14b4af26dd843f5b8b481cea61b3102f0517baa3f94ba461e->leave($__internal_734e7123439ab1b14b4af26dd843f5b8b481cea61b3102f0517baa3f94ba461e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_765af5cf1f88b6492b1e0caf114f5e4ccb8fa1626ff9381310435af172848c10 = $this->env->getExtension("native_profiler");
        $__internal_765af5cf1f88b6492b1e0caf114f5e4ccb8fa1626ff9381310435af172848c10->enter($__internal_765af5cf1f88b6492b1e0caf114f5e4ccb8fa1626ff9381310435af172848c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_765af5cf1f88b6492b1e0caf114f5e4ccb8fa1626ff9381310435af172848c10->leave($__internal_765af5cf1f88b6492b1e0caf114f5e4ccb8fa1626ff9381310435af172848c10_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_959c486a0f7ed01a5c2ba336b4f21b2ffbb96b75c3157396d9311a1416dbc38b = $this->env->getExtension("native_profiler");
        $__internal_959c486a0f7ed01a5c2ba336b4f21b2ffbb96b75c3157396d9311a1416dbc38b->enter($__internal_959c486a0f7ed01a5c2ba336b4f21b2ffbb96b75c3157396d9311a1416dbc38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_959c486a0f7ed01a5c2ba336b4f21b2ffbb96b75c3157396d9311a1416dbc38b->leave($__internal_959c486a0f7ed01a5c2ba336b4f21b2ffbb96b75c3157396d9311a1416dbc38b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0d0cd007891c68629696e998f2243b8baf6c3a919bb8c7578dbe41977c1e6266 = $this->env->getExtension("native_profiler");
        $__internal_0d0cd007891c68629696e998f2243b8baf6c3a919bb8c7578dbe41977c1e6266->enter($__internal_0d0cd007891c68629696e998f2243b8baf6c3a919bb8c7578dbe41977c1e6266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0d0cd007891c68629696e998f2243b8baf6c3a919bb8c7578dbe41977c1e6266->leave($__internal_0d0cd007891c68629696e998f2243b8baf6c3a919bb8c7578dbe41977c1e6266_prof);

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
