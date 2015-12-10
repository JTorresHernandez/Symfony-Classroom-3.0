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
        $__internal_6652550fa7f7e966a1797821e8fe526f83aa3ece1b7977eabcab0c1232b6f188 = $this->env->getExtension("native_profiler");
        $__internal_6652550fa7f7e966a1797821e8fe526f83aa3ece1b7977eabcab0c1232b6f188->enter($__internal_6652550fa7f7e966a1797821e8fe526f83aa3ece1b7977eabcab0c1232b6f188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6652550fa7f7e966a1797821e8fe526f83aa3ece1b7977eabcab0c1232b6f188->leave($__internal_6652550fa7f7e966a1797821e8fe526f83aa3ece1b7977eabcab0c1232b6f188_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_946376bba1171d66107de9f430ead2e789e11bf3484db4036adbe83ec43d887e = $this->env->getExtension("native_profiler");
        $__internal_946376bba1171d66107de9f430ead2e789e11bf3484db4036adbe83ec43d887e->enter($__internal_946376bba1171d66107de9f430ead2e789e11bf3484db4036adbe83ec43d887e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_946376bba1171d66107de9f430ead2e789e11bf3484db4036adbe83ec43d887e->leave($__internal_946376bba1171d66107de9f430ead2e789e11bf3484db4036adbe83ec43d887e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_23d44c99c6ef88a6264d1419bfc21f63933a53be138d843eb2e5dfcf5e6c1fbf = $this->env->getExtension("native_profiler");
        $__internal_23d44c99c6ef88a6264d1419bfc21f63933a53be138d843eb2e5dfcf5e6c1fbf->enter($__internal_23d44c99c6ef88a6264d1419bfc21f63933a53be138d843eb2e5dfcf5e6c1fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_23d44c99c6ef88a6264d1419bfc21f63933a53be138d843eb2e5dfcf5e6c1fbf->leave($__internal_23d44c99c6ef88a6264d1419bfc21f63933a53be138d843eb2e5dfcf5e6c1fbf_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a0ac348611218ac919051c1fc3d4fd339a8f319fd81a571c7ae530f35ef79ea2 = $this->env->getExtension("native_profiler");
        $__internal_a0ac348611218ac919051c1fc3d4fd339a8f319fd81a571c7ae530f35ef79ea2->enter($__internal_a0ac348611218ac919051c1fc3d4fd339a8f319fd81a571c7ae530f35ef79ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a0ac348611218ac919051c1fc3d4fd339a8f319fd81a571c7ae530f35ef79ea2->leave($__internal_a0ac348611218ac919051c1fc3d4fd339a8f319fd81a571c7ae530f35ef79ea2_prof);

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
