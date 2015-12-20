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
        $__internal_ce61644e448ca8d1e655ab0d16a8742b93f732587a464415f5fb69d3043e1347 = $this->env->getExtension("native_profiler");
        $__internal_ce61644e448ca8d1e655ab0d16a8742b93f732587a464415f5fb69d3043e1347->enter($__internal_ce61644e448ca8d1e655ab0d16a8742b93f732587a464415f5fb69d3043e1347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ce61644e448ca8d1e655ab0d16a8742b93f732587a464415f5fb69d3043e1347->leave($__internal_ce61644e448ca8d1e655ab0d16a8742b93f732587a464415f5fb69d3043e1347_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9345fae1747c301c2d2b7492714fc010289e15ffe4290b7696370922487e61b4 = $this->env->getExtension("native_profiler");
        $__internal_9345fae1747c301c2d2b7492714fc010289e15ffe4290b7696370922487e61b4->enter($__internal_9345fae1747c301c2d2b7492714fc010289e15ffe4290b7696370922487e61b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_9345fae1747c301c2d2b7492714fc010289e15ffe4290b7696370922487e61b4->leave($__internal_9345fae1747c301c2d2b7492714fc010289e15ffe4290b7696370922487e61b4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6147b2204ea8cc0caa085a7ad49dd05b0215a0a1e12d1d817043f1a343846620 = $this->env->getExtension("native_profiler");
        $__internal_6147b2204ea8cc0caa085a7ad49dd05b0215a0a1e12d1d817043f1a343846620->enter($__internal_6147b2204ea8cc0caa085a7ad49dd05b0215a0a1e12d1d817043f1a343846620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6147b2204ea8cc0caa085a7ad49dd05b0215a0a1e12d1d817043f1a343846620->leave($__internal_6147b2204ea8cc0caa085a7ad49dd05b0215a0a1e12d1d817043f1a343846620_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d3b4d588e134953c16b38c3f200e7c4279ecf30e01c57771b0e4ee0099cf804f = $this->env->getExtension("native_profiler");
        $__internal_d3b4d588e134953c16b38c3f200e7c4279ecf30e01c57771b0e4ee0099cf804f->enter($__internal_d3b4d588e134953c16b38c3f200e7c4279ecf30e01c57771b0e4ee0099cf804f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d3b4d588e134953c16b38c3f200e7c4279ecf30e01c57771b0e4ee0099cf804f->leave($__internal_d3b4d588e134953c16b38c3f200e7c4279ecf30e01c57771b0e4ee0099cf804f_prof);

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
