<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_3a435ee46c08cdde6376bb0195b91616c73a24810d1d43e88013372d84fada74 extends Twig_Template
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
        $__internal_f9ddf77ed1e807d2907465c8427d04d9a2c0bc9309b091a241d54484ca6c3b35 = $this->env->getExtension("native_profiler");
        $__internal_f9ddf77ed1e807d2907465c8427d04d9a2c0bc9309b091a241d54484ca6c3b35->enter($__internal_f9ddf77ed1e807d2907465c8427d04d9a2c0bc9309b091a241d54484ca6c3b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f9ddf77ed1e807d2907465c8427d04d9a2c0bc9309b091a241d54484ca6c3b35->leave($__internal_f9ddf77ed1e807d2907465c8427d04d9a2c0bc9309b091a241d54484ca6c3b35_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_65aa71ad9caa59220139a241745e64bdc900d54987a890cd24f13954360d513c = $this->env->getExtension("native_profiler");
        $__internal_65aa71ad9caa59220139a241745e64bdc900d54987a890cd24f13954360d513c->enter($__internal_65aa71ad9caa59220139a241745e64bdc900d54987a890cd24f13954360d513c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_65aa71ad9caa59220139a241745e64bdc900d54987a890cd24f13954360d513c->leave($__internal_65aa71ad9caa59220139a241745e64bdc900d54987a890cd24f13954360d513c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c2bc415f53fe443b2c337b75cc63edb3c94dffeafccd5734679d00b8bb3fc223 = $this->env->getExtension("native_profiler");
        $__internal_c2bc415f53fe443b2c337b75cc63edb3c94dffeafccd5734679d00b8bb3fc223->enter($__internal_c2bc415f53fe443b2c337b75cc63edb3c94dffeafccd5734679d00b8bb3fc223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c2bc415f53fe443b2c337b75cc63edb3c94dffeafccd5734679d00b8bb3fc223->leave($__internal_c2bc415f53fe443b2c337b75cc63edb3c94dffeafccd5734679d00b8bb3fc223_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f316c3ff3c9e36725e8c6ca8b8d66e573c9b319e76a5279065b4f1f294c7789b = $this->env->getExtension("native_profiler");
        $__internal_f316c3ff3c9e36725e8c6ca8b8d66e573c9b319e76a5279065b4f1f294c7789b->enter($__internal_f316c3ff3c9e36725e8c6ca8b8d66e573c9b319e76a5279065b4f1f294c7789b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f316c3ff3c9e36725e8c6ca8b8d66e573c9b319e76a5279065b4f1f294c7789b->leave($__internal_f316c3ff3c9e36725e8c6ca8b8d66e573c9b319e76a5279065b4f1f294c7789b_prof);

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
