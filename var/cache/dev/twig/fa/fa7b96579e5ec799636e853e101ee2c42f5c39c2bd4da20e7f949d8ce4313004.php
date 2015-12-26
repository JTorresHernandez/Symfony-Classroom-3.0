<?php

/* UserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_bc192b51897eb4e02a3d50676413bdd42a03420b315eaf0ad9fbf3150da047ee extends Twig_Template
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
        $__internal_84dd9a697618cb787949e1df69f1ebd560ca478c13b6ac40d963082cc21a7647 = $this->env->getExtension("native_profiler");
        $__internal_84dd9a697618cb787949e1df69f1ebd560ca478c13b6ac40d963082cc21a7647->enter($__internal_84dd9a697618cb787949e1df69f1ebd560ca478c13b6ac40d963082cc21a7647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84dd9a697618cb787949e1df69f1ebd560ca478c13b6ac40d963082cc21a7647->leave($__internal_84dd9a697618cb787949e1df69f1ebd560ca478c13b6ac40d963082cc21a7647_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb383c4d7736901ef79e8aac73f2833a1ae72ed63dfb2299cfd2944e8efde56a = $this->env->getExtension("native_profiler");
        $__internal_bb383c4d7736901ef79e8aac73f2833a1ae72ed63dfb2299cfd2944e8efde56a->enter($__internal_bb383c4d7736901ef79e8aac73f2833a1ae72ed63dfb2299cfd2944e8efde56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_bb383c4d7736901ef79e8aac73f2833a1ae72ed63dfb2299cfd2944e8efde56a->leave($__internal_bb383c4d7736901ef79e8aac73f2833a1ae72ed63dfb2299cfd2944e8efde56a_prof);

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
