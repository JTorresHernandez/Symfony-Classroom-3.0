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
        $__internal_6b3829064dedc1080b3e3c4b6053e65f28e6a56dc19556d0d092da1285e08af9 = $this->env->getExtension("native_profiler");
        $__internal_6b3829064dedc1080b3e3c4b6053e65f28e6a56dc19556d0d092da1285e08af9->enter($__internal_6b3829064dedc1080b3e3c4b6053e65f28e6a56dc19556d0d092da1285e08af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3829064dedc1080b3e3c4b6053e65f28e6a56dc19556d0d092da1285e08af9->leave($__internal_6b3829064dedc1080b3e3c4b6053e65f28e6a56dc19556d0d092da1285e08af9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ec5659ff27441ecd9be53350e231b4fc0b67311c1d292af38dc53de07f85c2f = $this->env->getExtension("native_profiler");
        $__internal_7ec5659ff27441ecd9be53350e231b4fc0b67311c1d292af38dc53de07f85c2f->enter($__internal_7ec5659ff27441ecd9be53350e231b4fc0b67311c1d292af38dc53de07f85c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_7ec5659ff27441ecd9be53350e231b4fc0b67311c1d292af38dc53de07f85c2f->leave($__internal_7ec5659ff27441ecd9be53350e231b4fc0b67311c1d292af38dc53de07f85c2f_prof);

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
