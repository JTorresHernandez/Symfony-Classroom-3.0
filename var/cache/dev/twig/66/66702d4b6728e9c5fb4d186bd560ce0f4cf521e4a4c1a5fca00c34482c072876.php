<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_70a7a8cc5138c1a8638b707f70c2ca6d6b7b15e78c4a6da91af71f07ac0fea04 extends Twig_Template
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
        $__internal_5eb9eb2c190d91c4acd142cbb1f2e7b3fa707637554718dd0b0adab5dbad056d = $this->env->getExtension("native_profiler");
        $__internal_5eb9eb2c190d91c4acd142cbb1f2e7b3fa707637554718dd0b0adab5dbad056d->enter($__internal_5eb9eb2c190d91c4acd142cbb1f2e7b3fa707637554718dd0b0adab5dbad056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb9eb2c190d91c4acd142cbb1f2e7b3fa707637554718dd0b0adab5dbad056d->leave($__internal_5eb9eb2c190d91c4acd142cbb1f2e7b3fa707637554718dd0b0adab5dbad056d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_871338127fd00273ecab4b431e08d17ef23f1a7a52809886ca3370105f3f9a9d = $this->env->getExtension("native_profiler");
        $__internal_871338127fd00273ecab4b431e08d17ef23f1a7a52809886ca3370105f3f9a9d->enter($__internal_871338127fd00273ecab4b431e08d17ef23f1a7a52809886ca3370105f3f9a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_871338127fd00273ecab4b431e08d17ef23f1a7a52809886ca3370105f3f9a9d->leave($__internal_871338127fd00273ecab4b431e08d17ef23f1a7a52809886ca3370105f3f9a9d_prof);

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
