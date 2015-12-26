<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_5b2e4ed71a178c0a946720ab6999d7e9dc33cb4db6f8982e3428f37352326290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_88ec7ae6206c10206b5f83fa9add65e751aa00cef4bfdbab7bdd1c060f4ec685 = $this->env->getExtension("native_profiler");
        $__internal_88ec7ae6206c10206b5f83fa9add65e751aa00cef4bfdbab7bdd1c060f4ec685->enter($__internal_88ec7ae6206c10206b5f83fa9add65e751aa00cef4bfdbab7bdd1c060f4ec685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88ec7ae6206c10206b5f83fa9add65e751aa00cef4bfdbab7bdd1c060f4ec685->leave($__internal_88ec7ae6206c10206b5f83fa9add65e751aa00cef4bfdbab7bdd1c060f4ec685_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff89327352095fcf0be401e6ee7c5c01832b82b66e370b5d07f979f9d9000f6a = $this->env->getExtension("native_profiler");
        $__internal_ff89327352095fcf0be401e6ee7c5c01832b82b66e370b5d07f979f9d9000f6a->enter($__internal_ff89327352095fcf0be401e6ee7c5c01832b82b66e370b5d07f979f9d9000f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ff89327352095fcf0be401e6ee7c5c01832b82b66e370b5d07f979f9d9000f6a->leave($__internal_ff89327352095fcf0be401e6ee7c5c01832b82b66e370b5d07f979f9d9000f6a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
