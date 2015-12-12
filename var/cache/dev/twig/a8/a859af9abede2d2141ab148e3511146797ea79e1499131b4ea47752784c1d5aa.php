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
        $__internal_0a31058d0d2e2d0ccb4081682fdd187e9a5043ee166c656c367756d65a400af0 = $this->env->getExtension("native_profiler");
        $__internal_0a31058d0d2e2d0ccb4081682fdd187e9a5043ee166c656c367756d65a400af0->enter($__internal_0a31058d0d2e2d0ccb4081682fdd187e9a5043ee166c656c367756d65a400af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0a31058d0d2e2d0ccb4081682fdd187e9a5043ee166c656c367756d65a400af0->leave($__internal_0a31058d0d2e2d0ccb4081682fdd187e9a5043ee166c656c367756d65a400af0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9e37749272fdef7fdf7769cd7332ff8584fd23a18739c90c8992da4c788bc95f = $this->env->getExtension("native_profiler");
        $__internal_9e37749272fdef7fdf7769cd7332ff8584fd23a18739c90c8992da4c788bc95f->enter($__internal_9e37749272fdef7fdf7769cd7332ff8584fd23a18739c90c8992da4c788bc95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_9e37749272fdef7fdf7769cd7332ff8584fd23a18739c90c8992da4c788bc95f->leave($__internal_9e37749272fdef7fdf7769cd7332ff8584fd23a18739c90c8992da4c788bc95f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_17ef4a52635f4b5863b50293cd226ee9f2c9d2ef2904be38c41df9358a8e3bed = $this->env->getExtension("native_profiler");
        $__internal_17ef4a52635f4b5863b50293cd226ee9f2c9d2ef2904be38c41df9358a8e3bed->enter($__internal_17ef4a52635f4b5863b50293cd226ee9f2c9d2ef2904be38c41df9358a8e3bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_17ef4a52635f4b5863b50293cd226ee9f2c9d2ef2904be38c41df9358a8e3bed->leave($__internal_17ef4a52635f4b5863b50293cd226ee9f2c9d2ef2904be38c41df9358a8e3bed_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3054aa7178d247b07c575122ac058bea70de17736a5f7e58cc8a5a3d2679abf0 = $this->env->getExtension("native_profiler");
        $__internal_3054aa7178d247b07c575122ac058bea70de17736a5f7e58cc8a5a3d2679abf0->enter($__internal_3054aa7178d247b07c575122ac058bea70de17736a5f7e58cc8a5a3d2679abf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3054aa7178d247b07c575122ac058bea70de17736a5f7e58cc8a5a3d2679abf0->leave($__internal_3054aa7178d247b07c575122ac058bea70de17736a5f7e58cc8a5a3d2679abf0_prof);

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
