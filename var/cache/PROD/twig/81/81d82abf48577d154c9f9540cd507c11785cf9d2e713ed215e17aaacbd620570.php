<?php

/* UserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_84ce6b27d40dee68967c6ad1c01464aa9fc3274edad95fa4e1b27081f9b2949c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6db9cbc0b11556e98f333ad87b34106d5437d2268805457d405ef1e615547e2e = $this->env->getExtension("native_profiler");
        $__internal_6db9cbc0b11556e98f333ad87b34106d5437d2268805457d405ef1e615547e2e->enter($__internal_6db9cbc0b11556e98f333ad87b34106d5437d2268805457d405ef1e615547e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6db9cbc0b11556e98f333ad87b34106d5437d2268805457d405ef1e615547e2e->leave($__internal_6db9cbc0b11556e98f333ad87b34106d5437d2268805457d405ef1e615547e2e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e86accfdb86095e61c2e9417a14db4ff6a1a2f679ac6db0d5dac01357cb5c90f = $this->env->getExtension("native_profiler");
        $__internal_e86accfdb86095e61c2e9417a14db4ff6a1a2f679ac6db0d5dac01357cb5c90f->enter($__internal_e86accfdb86095e61c2e9417a14db4ff6a1a2f679ac6db0d5dac01357cb5c90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e86accfdb86095e61c2e9417a14db4ff6a1a2f679ac6db0d5dac01357cb5c90f->leave($__internal_e86accfdb86095e61c2e9417a14db4ff6a1a2f679ac6db0d5dac01357cb5c90f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
