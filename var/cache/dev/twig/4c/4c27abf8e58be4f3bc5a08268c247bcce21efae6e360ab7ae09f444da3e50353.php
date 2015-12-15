<?php

/* FOSUserBundle:Registration:email.txt.twig */
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
        $__internal_397d2d80e207195b0abfabf7a60160f6090bd8b4ad043f14216a252516715e4a = $this->env->getExtension("native_profiler");
        $__internal_397d2d80e207195b0abfabf7a60160f6090bd8b4ad043f14216a252516715e4a->enter($__internal_397d2d80e207195b0abfabf7a60160f6090bd8b4ad043f14216a252516715e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_397d2d80e207195b0abfabf7a60160f6090bd8b4ad043f14216a252516715e4a->leave($__internal_397d2d80e207195b0abfabf7a60160f6090bd8b4ad043f14216a252516715e4a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ca2ba7a774f557e5eb92c4de8faa543608433e9b93a12d4fc4e19f24cca526a5 = $this->env->getExtension("native_profiler");
        $__internal_ca2ba7a774f557e5eb92c4de8faa543608433e9b93a12d4fc4e19f24cca526a5->enter($__internal_ca2ba7a774f557e5eb92c4de8faa543608433e9b93a12d4fc4e19f24cca526a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ca2ba7a774f557e5eb92c4de8faa543608433e9b93a12d4fc4e19f24cca526a5->leave($__internal_ca2ba7a774f557e5eb92c4de8faa543608433e9b93a12d4fc4e19f24cca526a5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d0bad47f90456db7064610bd3f7eb2c67fa46972b1ea8a5d97dffad88f0a11c3 = $this->env->getExtension("native_profiler");
        $__internal_d0bad47f90456db7064610bd3f7eb2c67fa46972b1ea8a5d97dffad88f0a11c3->enter($__internal_d0bad47f90456db7064610bd3f7eb2c67fa46972b1ea8a5d97dffad88f0a11c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d0bad47f90456db7064610bd3f7eb2c67fa46972b1ea8a5d97dffad88f0a11c3->leave($__internal_d0bad47f90456db7064610bd3f7eb2c67fa46972b1ea8a5d97dffad88f0a11c3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_68657319981c6869cae1d245b04ab3ce9d0d3d04b80f66090637d0a4593c6459 = $this->env->getExtension("native_profiler");
        $__internal_68657319981c6869cae1d245b04ab3ce9d0d3d04b80f66090637d0a4593c6459->enter($__internal_68657319981c6869cae1d245b04ab3ce9d0d3d04b80f66090637d0a4593c6459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_68657319981c6869cae1d245b04ab3ce9d0d3d04b80f66090637d0a4593c6459->leave($__internal_68657319981c6869cae1d245b04ab3ce9d0d3d04b80f66090637d0a4593c6459_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
