<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_fd62b0c59f3f975f69de335371f7a65dbb5693edaa5818c7838689a851015aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_2c9a91a68b73b74d1345fd464c53aa464fee2b06f7985905786171ab8f7fc64e = $this->env->getExtension("native_profiler");
        $__internal_2c9a91a68b73b74d1345fd464c53aa464fee2b06f7985905786171ab8f7fc64e->enter($__internal_2c9a91a68b73b74d1345fd464c53aa464fee2b06f7985905786171ab8f7fc64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9a91a68b73b74d1345fd464c53aa464fee2b06f7985905786171ab8f7fc64e->leave($__internal_2c9a91a68b73b74d1345fd464c53aa464fee2b06f7985905786171ab8f7fc64e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_986b8eaa77e024580b397256c4da38c91b830e4fa54258d9cc088c030d4b245b = $this->env->getExtension("native_profiler");
        $__internal_986b8eaa77e024580b397256c4da38c91b830e4fa54258d9cc088c030d4b245b->enter($__internal_986b8eaa77e024580b397256c4da38c91b830e4fa54258d9cc088c030d4b245b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_986b8eaa77e024580b397256c4da38c91b830e4fa54258d9cc088c030d4b245b->leave($__internal_986b8eaa77e024580b397256c4da38c91b830e4fa54258d9cc088c030d4b245b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
