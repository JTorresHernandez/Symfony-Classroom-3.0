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
        $__internal_6f7d5e5ecc9d7dd3ec95241c000dbff5877b2a70966fc43156fbf0497f4310dc = $this->env->getExtension("native_profiler");
        $__internal_6f7d5e5ecc9d7dd3ec95241c000dbff5877b2a70966fc43156fbf0497f4310dc->enter($__internal_6f7d5e5ecc9d7dd3ec95241c000dbff5877b2a70966fc43156fbf0497f4310dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6f7d5e5ecc9d7dd3ec95241c000dbff5877b2a70966fc43156fbf0497f4310dc->leave($__internal_6f7d5e5ecc9d7dd3ec95241c000dbff5877b2a70966fc43156fbf0497f4310dc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ab400d8bdd121394d12591bba83c59741fa7892ece4c4ebc20662f00e8d834b7 = $this->env->getExtension("native_profiler");
        $__internal_ab400d8bdd121394d12591bba83c59741fa7892ece4c4ebc20662f00e8d834b7->enter($__internal_ab400d8bdd121394d12591bba83c59741fa7892ece4c4ebc20662f00e8d834b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ab400d8bdd121394d12591bba83c59741fa7892ece4c4ebc20662f00e8d834b7->leave($__internal_ab400d8bdd121394d12591bba83c59741fa7892ece4c4ebc20662f00e8d834b7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_138c3558ebefb36d4c2cdc668c97606599ee70799292ec19aaf83b903a46cc25 = $this->env->getExtension("native_profiler");
        $__internal_138c3558ebefb36d4c2cdc668c97606599ee70799292ec19aaf83b903a46cc25->enter($__internal_138c3558ebefb36d4c2cdc668c97606599ee70799292ec19aaf83b903a46cc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_138c3558ebefb36d4c2cdc668c97606599ee70799292ec19aaf83b903a46cc25->leave($__internal_138c3558ebefb36d4c2cdc668c97606599ee70799292ec19aaf83b903a46cc25_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d62d9bf04aabba923ea3fe2ae74b263201721c69f50df7b572140e6e3af6ee21 = $this->env->getExtension("native_profiler");
        $__internal_d62d9bf04aabba923ea3fe2ae74b263201721c69f50df7b572140e6e3af6ee21->enter($__internal_d62d9bf04aabba923ea3fe2ae74b263201721c69f50df7b572140e6e3af6ee21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d62d9bf04aabba923ea3fe2ae74b263201721c69f50df7b572140e6e3af6ee21->leave($__internal_d62d9bf04aabba923ea3fe2ae74b263201721c69f50df7b572140e6e3af6ee21_prof);

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
