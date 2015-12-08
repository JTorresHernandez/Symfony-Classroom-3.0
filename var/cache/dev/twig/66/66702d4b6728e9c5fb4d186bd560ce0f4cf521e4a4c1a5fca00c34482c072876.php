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
        $__internal_0bbc30e3c16ae81a504ab2f6516c74e48cec174af9f108340a86f3f2f45c405d = $this->env->getExtension("native_profiler");
        $__internal_0bbc30e3c16ae81a504ab2f6516c74e48cec174af9f108340a86f3f2f45c405d->enter($__internal_0bbc30e3c16ae81a504ab2f6516c74e48cec174af9f108340a86f3f2f45c405d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bbc30e3c16ae81a504ab2f6516c74e48cec174af9f108340a86f3f2f45c405d->leave($__internal_0bbc30e3c16ae81a504ab2f6516c74e48cec174af9f108340a86f3f2f45c405d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c04c05532f8dd9dd39ad1e3c553cdebad4e1d803538c21bbcab827847fd05c39 = $this->env->getExtension("native_profiler");
        $__internal_c04c05532f8dd9dd39ad1e3c553cdebad4e1d803538c21bbcab827847fd05c39->enter($__internal_c04c05532f8dd9dd39ad1e3c553cdebad4e1d803538c21bbcab827847fd05c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c04c05532f8dd9dd39ad1e3c553cdebad4e1d803538c21bbcab827847fd05c39->leave($__internal_c04c05532f8dd9dd39ad1e3c553cdebad4e1d803538c21bbcab827847fd05c39_prof);

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
