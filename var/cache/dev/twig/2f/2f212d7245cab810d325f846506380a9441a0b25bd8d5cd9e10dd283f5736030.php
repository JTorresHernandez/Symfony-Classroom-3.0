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
        $__internal_c09dec72752d5a34602ed20f2aa39320009247322209bc5ab25cbc826bfb0808 = $this->env->getExtension("native_profiler");
        $__internal_c09dec72752d5a34602ed20f2aa39320009247322209bc5ab25cbc826bfb0808->enter($__internal_c09dec72752d5a34602ed20f2aa39320009247322209bc5ab25cbc826bfb0808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c09dec72752d5a34602ed20f2aa39320009247322209bc5ab25cbc826bfb0808->leave($__internal_c09dec72752d5a34602ed20f2aa39320009247322209bc5ab25cbc826bfb0808_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_72b33c0c5d326fffcec16c76edefcd907b8356a8151a6d40d96e48e2c7a116ea = $this->env->getExtension("native_profiler");
        $__internal_72b33c0c5d326fffcec16c76edefcd907b8356a8151a6d40d96e48e2c7a116ea->enter($__internal_72b33c0c5d326fffcec16c76edefcd907b8356a8151a6d40d96e48e2c7a116ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_72b33c0c5d326fffcec16c76edefcd907b8356a8151a6d40d96e48e2c7a116ea->leave($__internal_72b33c0c5d326fffcec16c76edefcd907b8356a8151a6d40d96e48e2c7a116ea_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_44fa3b9fac7041f0ba8987eb1ced44bfd165c246f229eb26ba57c38c01625dac = $this->env->getExtension("native_profiler");
        $__internal_44fa3b9fac7041f0ba8987eb1ced44bfd165c246f229eb26ba57c38c01625dac->enter($__internal_44fa3b9fac7041f0ba8987eb1ced44bfd165c246f229eb26ba57c38c01625dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_44fa3b9fac7041f0ba8987eb1ced44bfd165c246f229eb26ba57c38c01625dac->leave($__internal_44fa3b9fac7041f0ba8987eb1ced44bfd165c246f229eb26ba57c38c01625dac_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b6a4577c476e397b84b3bf844a1c37d8bb71c5c464cc330cf0cce995e1dc99ae = $this->env->getExtension("native_profiler");
        $__internal_b6a4577c476e397b84b3bf844a1c37d8bb71c5c464cc330cf0cce995e1dc99ae->enter($__internal_b6a4577c476e397b84b3bf844a1c37d8bb71c5c464cc330cf0cce995e1dc99ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b6a4577c476e397b84b3bf844a1c37d8bb71c5c464cc330cf0cce995e1dc99ae->leave($__internal_b6a4577c476e397b84b3bf844a1c37d8bb71c5c464cc330cf0cce995e1dc99ae_prof);

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
