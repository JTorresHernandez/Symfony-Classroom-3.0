<?php

/* UserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_785340534e3be41ff90c4b5862d4e71630ec75279157f3b34b900a59b18bb766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_282108802aa3f01f5e21f19ffca9841a40bbea30b59c31ea7f8ae0de955d1eee = $this->env->getExtension("native_profiler");
        $__internal_282108802aa3f01f5e21f19ffca9841a40bbea30b59c31ea7f8ae0de955d1eee->enter($__internal_282108802aa3f01f5e21f19ffca9841a40bbea30b59c31ea7f8ae0de955d1eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_282108802aa3f01f5e21f19ffca9841a40bbea30b59c31ea7f8ae0de955d1eee->leave($__internal_282108802aa3f01f5e21f19ffca9841a40bbea30b59c31ea7f8ae0de955d1eee_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e210bad410052af6b9658adcf56439a6d511117433f7ba42bd458b796a83f6cf = $this->env->getExtension("native_profiler");
        $__internal_e210bad410052af6b9658adcf56439a6d511117433f7ba42bd458b796a83f6cf->enter($__internal_e210bad410052af6b9658adcf56439a6d511117433f7ba42bd458b796a83f6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e210bad410052af6b9658adcf56439a6d511117433f7ba42bd458b796a83f6cf->leave($__internal_e210bad410052af6b9658adcf56439a6d511117433f7ba42bd458b796a83f6cf_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:checkEmail.html.twig";
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
