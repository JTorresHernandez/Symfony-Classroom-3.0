<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_6c34340fc22d619898202798d72e8fb3625aa834452efb3728caf07ea0eed0c6 extends Twig_Template
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
        $__internal_549d8a6aaab91073baf5fd928db8b16760807dae532d0f7e5563b6764aace350 = $this->env->getExtension("native_profiler");
        $__internal_549d8a6aaab91073baf5fd928db8b16760807dae532d0f7e5563b6764aace350->enter($__internal_549d8a6aaab91073baf5fd928db8b16760807dae532d0f7e5563b6764aace350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_549d8a6aaab91073baf5fd928db8b16760807dae532d0f7e5563b6764aace350->leave($__internal_549d8a6aaab91073baf5fd928db8b16760807dae532d0f7e5563b6764aace350_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21c0e10320096f783eab9f2591f0e3e331f4733251ec046c339a339ffc39ffe3 = $this->env->getExtension("native_profiler");
        $__internal_21c0e10320096f783eab9f2591f0e3e331f4733251ec046c339a339ffc39ffe3->enter($__internal_21c0e10320096f783eab9f2591f0e3e331f4733251ec046c339a339ffc39ffe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_21c0e10320096f783eab9f2591f0e3e331f4733251ec046c339a339ffc39ffe3->leave($__internal_21c0e10320096f783eab9f2591f0e3e331f4733251ec046c339a339ffc39ffe3_prof);

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
