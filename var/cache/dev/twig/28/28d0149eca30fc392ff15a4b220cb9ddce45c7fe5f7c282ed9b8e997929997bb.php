<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_7af850a47cb9182b1bfe0dc4b54b412f7f4012facd0c52c946b751a0b8a23514 extends Twig_Template
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
        $__internal_61980ef586090f38970d4ccd7498253bf869b225067b8f7e4b701091ed69185f = $this->env->getExtension("native_profiler");
        $__internal_61980ef586090f38970d4ccd7498253bf869b225067b8f7e4b701091ed69185f->enter($__internal_61980ef586090f38970d4ccd7498253bf869b225067b8f7e4b701091ed69185f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_61980ef586090f38970d4ccd7498253bf869b225067b8f7e4b701091ed69185f->leave($__internal_61980ef586090f38970d4ccd7498253bf869b225067b8f7e4b701091ed69185f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_be68c54c7aafbe2459ed54b32436c590d49d1dfe2bca446452a6bfdeb9ad2521 = $this->env->getExtension("native_profiler");
        $__internal_be68c54c7aafbe2459ed54b32436c590d49d1dfe2bca446452a6bfdeb9ad2521->enter($__internal_be68c54c7aafbe2459ed54b32436c590d49d1dfe2bca446452a6bfdeb9ad2521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_be68c54c7aafbe2459ed54b32436c590d49d1dfe2bca446452a6bfdeb9ad2521->leave($__internal_be68c54c7aafbe2459ed54b32436c590d49d1dfe2bca446452a6bfdeb9ad2521_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0d75412e535ecdc04d9a0b2cb496fbba5a1daf3467fb339b49063c1534caf456 = $this->env->getExtension("native_profiler");
        $__internal_0d75412e535ecdc04d9a0b2cb496fbba5a1daf3467fb339b49063c1534caf456->enter($__internal_0d75412e535ecdc04d9a0b2cb496fbba5a1daf3467fb339b49063c1534caf456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0d75412e535ecdc04d9a0b2cb496fbba5a1daf3467fb339b49063c1534caf456->leave($__internal_0d75412e535ecdc04d9a0b2cb496fbba5a1daf3467fb339b49063c1534caf456_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a331b23a35d8b51f4cb126ce816fe241120ef20e5767d640021b06f897253f28 = $this->env->getExtension("native_profiler");
        $__internal_a331b23a35d8b51f4cb126ce816fe241120ef20e5767d640021b06f897253f28->enter($__internal_a331b23a35d8b51f4cb126ce816fe241120ef20e5767d640021b06f897253f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a331b23a35d8b51f4cb126ce816fe241120ef20e5767d640021b06f897253f28->leave($__internal_a331b23a35d8b51f4cb126ce816fe241120ef20e5767d640021b06f897253f28_prof);

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
