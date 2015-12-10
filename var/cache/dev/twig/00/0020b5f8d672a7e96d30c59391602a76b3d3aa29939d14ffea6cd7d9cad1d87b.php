<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e04b3b0ad0aa56a2e1421c9da605f497d0c3defc1debc8595c724746d9900166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_4d9da100819a1dd00b48951a06ce15ec9679e8eb46d7a22094881a2eed24f40b = $this->env->getExtension("native_profiler");
        $__internal_4d9da100819a1dd00b48951a06ce15ec9679e8eb46d7a22094881a2eed24f40b->enter($__internal_4d9da100819a1dd00b48951a06ce15ec9679e8eb46d7a22094881a2eed24f40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9da100819a1dd00b48951a06ce15ec9679e8eb46d7a22094881a2eed24f40b->leave($__internal_4d9da100819a1dd00b48951a06ce15ec9679e8eb46d7a22094881a2eed24f40b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1651663711d341aace95257057f0f3cbf7e01a8164ca7f3865fd47362b8bc28a = $this->env->getExtension("native_profiler");
        $__internal_1651663711d341aace95257057f0f3cbf7e01a8164ca7f3865fd47362b8bc28a->enter($__internal_1651663711d341aace95257057f0f3cbf7e01a8164ca7f3865fd47362b8bc28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1651663711d341aace95257057f0f3cbf7e01a8164ca7f3865fd47362b8bc28a->leave($__internal_1651663711d341aace95257057f0f3cbf7e01a8164ca7f3865fd47362b8bc28a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:checkEmail.html.twig";
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
