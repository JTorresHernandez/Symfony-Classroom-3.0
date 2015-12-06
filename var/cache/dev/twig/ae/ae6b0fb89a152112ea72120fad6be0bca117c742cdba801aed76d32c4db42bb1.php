<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4bfbe29d0aad7053a16b5af0b82a614ce770c8890e7af97b68c93269afd9a850 extends Twig_Template
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
        $__internal_74f88322cbe9fd7e7a18152fe1b4c1d403221c345f994c760fdb3f2606c5b823 = $this->env->getExtension("native_profiler");
        $__internal_74f88322cbe9fd7e7a18152fe1b4c1d403221c345f994c760fdb3f2606c5b823->enter($__internal_74f88322cbe9fd7e7a18152fe1b4c1d403221c345f994c760fdb3f2606c5b823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_74f88322cbe9fd7e7a18152fe1b4c1d403221c345f994c760fdb3f2606c5b823->leave($__internal_74f88322cbe9fd7e7a18152fe1b4c1d403221c345f994c760fdb3f2606c5b823_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_37e3b247bffde831b0c257040422526ffea36d4a79e5039ef0c3e40d2d08949f = $this->env->getExtension("native_profiler");
        $__internal_37e3b247bffde831b0c257040422526ffea36d4a79e5039ef0c3e40d2d08949f->enter($__internal_37e3b247bffde831b0c257040422526ffea36d4a79e5039ef0c3e40d2d08949f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_37e3b247bffde831b0c257040422526ffea36d4a79e5039ef0c3e40d2d08949f->leave($__internal_37e3b247bffde831b0c257040422526ffea36d4a79e5039ef0c3e40d2d08949f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ee29eadb0987c847fbb7ebfa55b5b2271701e750e1872b1c110875925553ed1d = $this->env->getExtension("native_profiler");
        $__internal_ee29eadb0987c847fbb7ebfa55b5b2271701e750e1872b1c110875925553ed1d->enter($__internal_ee29eadb0987c847fbb7ebfa55b5b2271701e750e1872b1c110875925553ed1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ee29eadb0987c847fbb7ebfa55b5b2271701e750e1872b1c110875925553ed1d->leave($__internal_ee29eadb0987c847fbb7ebfa55b5b2271701e750e1872b1c110875925553ed1d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f7a36f2e61ac6387404db392439a0e73149eeaf5591e9e84d54ff41014b712d0 = $this->env->getExtension("native_profiler");
        $__internal_f7a36f2e61ac6387404db392439a0e73149eeaf5591e9e84d54ff41014b712d0->enter($__internal_f7a36f2e61ac6387404db392439a0e73149eeaf5591e9e84d54ff41014b712d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f7a36f2e61ac6387404db392439a0e73149eeaf5591e9e84d54ff41014b712d0->leave($__internal_f7a36f2e61ac6387404db392439a0e73149eeaf5591e9e84d54ff41014b712d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
