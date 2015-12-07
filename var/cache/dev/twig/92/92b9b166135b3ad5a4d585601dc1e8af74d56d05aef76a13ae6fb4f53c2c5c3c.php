<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_19921d4f01009551193108cbe049da22414ff20265ab38587902fd60f89dc26c extends Twig_Template
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
        $__internal_022106b3ddfcc5bfcf8431c1479cf9766a8952ba64390ce3de6e480d72e7e775 = $this->env->getExtension("native_profiler");
        $__internal_022106b3ddfcc5bfcf8431c1479cf9766a8952ba64390ce3de6e480d72e7e775->enter($__internal_022106b3ddfcc5bfcf8431c1479cf9766a8952ba64390ce3de6e480d72e7e775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_022106b3ddfcc5bfcf8431c1479cf9766a8952ba64390ce3de6e480d72e7e775->leave($__internal_022106b3ddfcc5bfcf8431c1479cf9766a8952ba64390ce3de6e480d72e7e775_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e79ef28bb197f390b0695662391d0712b2a5d0b2d25639d7b1cfdba0a70de6fd = $this->env->getExtension("native_profiler");
        $__internal_e79ef28bb197f390b0695662391d0712b2a5d0b2d25639d7b1cfdba0a70de6fd->enter($__internal_e79ef28bb197f390b0695662391d0712b2a5d0b2d25639d7b1cfdba0a70de6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e79ef28bb197f390b0695662391d0712b2a5d0b2d25639d7b1cfdba0a70de6fd->leave($__internal_e79ef28bb197f390b0695662391d0712b2a5d0b2d25639d7b1cfdba0a70de6fd_prof);

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
