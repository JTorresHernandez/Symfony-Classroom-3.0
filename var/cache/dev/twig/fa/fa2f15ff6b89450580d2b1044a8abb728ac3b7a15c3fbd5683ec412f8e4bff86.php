<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_aa9c29d8d03303c7410e32a1159ab3f1c6dcd0d979f0fd612a25521e1d282eb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_ca914fb2b4d256d86567bf452c3bdce2eae0a0fb1bd929a3a88adc2b7ea75016 = $this->env->getExtension("native_profiler");
        $__internal_ca914fb2b4d256d86567bf452c3bdce2eae0a0fb1bd929a3a88adc2b7ea75016->enter($__internal_ca914fb2b4d256d86567bf452c3bdce2eae0a0fb1bd929a3a88adc2b7ea75016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca914fb2b4d256d86567bf452c3bdce2eae0a0fb1bd929a3a88adc2b7ea75016->leave($__internal_ca914fb2b4d256d86567bf452c3bdce2eae0a0fb1bd929a3a88adc2b7ea75016_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00b31a65c30fdbaeb55cb5a72505707f66ef3359cc37565526bb5a0221eee5c2 = $this->env->getExtension("native_profiler");
        $__internal_00b31a65c30fdbaeb55cb5a72505707f66ef3359cc37565526bb5a0221eee5c2->enter($__internal_00b31a65c30fdbaeb55cb5a72505707f66ef3359cc37565526bb5a0221eee5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_00b31a65c30fdbaeb55cb5a72505707f66ef3359cc37565526bb5a0221eee5c2->leave($__internal_00b31a65c30fdbaeb55cb5a72505707f66ef3359cc37565526bb5a0221eee5c2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
