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
        $__internal_68f4aee905112148768446b7b7fda16e19e61fd5629e01963c384ef42c5055b5 = $this->env->getExtension("native_profiler");
        $__internal_68f4aee905112148768446b7b7fda16e19e61fd5629e01963c384ef42c5055b5->enter($__internal_68f4aee905112148768446b7b7fda16e19e61fd5629e01963c384ef42c5055b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_68f4aee905112148768446b7b7fda16e19e61fd5629e01963c384ef42c5055b5->leave($__internal_68f4aee905112148768446b7b7fda16e19e61fd5629e01963c384ef42c5055b5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1dc4cc5d4b30bd6fabbf53feb9ddb3df75632e4dce7db978a2714f549952434b = $this->env->getExtension("native_profiler");
        $__internal_1dc4cc5d4b30bd6fabbf53feb9ddb3df75632e4dce7db978a2714f549952434b->enter($__internal_1dc4cc5d4b30bd6fabbf53feb9ddb3df75632e4dce7db978a2714f549952434b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1dc4cc5d4b30bd6fabbf53feb9ddb3df75632e4dce7db978a2714f549952434b->leave($__internal_1dc4cc5d4b30bd6fabbf53feb9ddb3df75632e4dce7db978a2714f549952434b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e1d3f1d416c02703aa47c67fd9b0ada1085d7e0fed1210dd50527da9a9673e1a = $this->env->getExtension("native_profiler");
        $__internal_e1d3f1d416c02703aa47c67fd9b0ada1085d7e0fed1210dd50527da9a9673e1a->enter($__internal_e1d3f1d416c02703aa47c67fd9b0ada1085d7e0fed1210dd50527da9a9673e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e1d3f1d416c02703aa47c67fd9b0ada1085d7e0fed1210dd50527da9a9673e1a->leave($__internal_e1d3f1d416c02703aa47c67fd9b0ada1085d7e0fed1210dd50527da9a9673e1a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5e9f55a059a76a54b36d0b2213255e5f4cd43e4e4d71a769712b8ac465da32ac = $this->env->getExtension("native_profiler");
        $__internal_5e9f55a059a76a54b36d0b2213255e5f4cd43e4e4d71a769712b8ac465da32ac->enter($__internal_5e9f55a059a76a54b36d0b2213255e5f4cd43e4e4d71a769712b8ac465da32ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5e9f55a059a76a54b36d0b2213255e5f4cd43e4e4d71a769712b8ac465da32ac->leave($__internal_5e9f55a059a76a54b36d0b2213255e5f4cd43e4e4d71a769712b8ac465da32ac_prof);

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
