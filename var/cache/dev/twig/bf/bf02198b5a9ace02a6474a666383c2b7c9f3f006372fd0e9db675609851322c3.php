<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_dbb8d8717a5f53771d1cc24e4da4d3e671feb6b29a3c6f0f229e0ed8cf0904a1 extends Twig_Template
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
        $__internal_e662d521eb1cf70356d4e3788a1a84e58ea7b2750ba9199d51cdaaec9944abc1 = $this->env->getExtension("native_profiler");
        $__internal_e662d521eb1cf70356d4e3788a1a84e58ea7b2750ba9199d51cdaaec9944abc1->enter($__internal_e662d521eb1cf70356d4e3788a1a84e58ea7b2750ba9199d51cdaaec9944abc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e662d521eb1cf70356d4e3788a1a84e58ea7b2750ba9199d51cdaaec9944abc1->leave($__internal_e662d521eb1cf70356d4e3788a1a84e58ea7b2750ba9199d51cdaaec9944abc1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b06798f81f4cf3b08699763f115614dc9ff3bb7b61681fd5aca16c3edd2b602 = $this->env->getExtension("native_profiler");
        $__internal_5b06798f81f4cf3b08699763f115614dc9ff3bb7b61681fd5aca16c3edd2b602->enter($__internal_5b06798f81f4cf3b08699763f115614dc9ff3bb7b61681fd5aca16c3edd2b602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5b06798f81f4cf3b08699763f115614dc9ff3bb7b61681fd5aca16c3edd2b602->leave($__internal_5b06798f81f4cf3b08699763f115614dc9ff3bb7b61681fd5aca16c3edd2b602_prof);

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
