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
        $__internal_2de1f66891a262ab262c0cf08e4ca69fe5512dc7b9d6ad54128bb2acd85d0c25 = $this->env->getExtension("native_profiler");
        $__internal_2de1f66891a262ab262c0cf08e4ca69fe5512dc7b9d6ad54128bb2acd85d0c25->enter($__internal_2de1f66891a262ab262c0cf08e4ca69fe5512dc7b9d6ad54128bb2acd85d0c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de1f66891a262ab262c0cf08e4ca69fe5512dc7b9d6ad54128bb2acd85d0c25->leave($__internal_2de1f66891a262ab262c0cf08e4ca69fe5512dc7b9d6ad54128bb2acd85d0c25_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_427811acd7effe4fcbd4608f0b4a988b974831f0bb8981fb559a0ad513c2619d = $this->env->getExtension("native_profiler");
        $__internal_427811acd7effe4fcbd4608f0b4a988b974831f0bb8981fb559a0ad513c2619d->enter($__internal_427811acd7effe4fcbd4608f0b4a988b974831f0bb8981fb559a0ad513c2619d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_427811acd7effe4fcbd4608f0b4a988b974831f0bb8981fb559a0ad513c2619d->leave($__internal_427811acd7effe4fcbd4608f0b4a988b974831f0bb8981fb559a0ad513c2619d_prof);

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
