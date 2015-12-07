<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_fca8d85324ff400692f8bcc215480626379e877f505f0116c71fde0b7ef5fcc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_47126d5165d4945d047fad1762feecd082ee3f7ead6128fb03a9bd90c42dc825 = $this->env->getExtension("native_profiler");
        $__internal_47126d5165d4945d047fad1762feecd082ee3f7ead6128fb03a9bd90c42dc825->enter($__internal_47126d5165d4945d047fad1762feecd082ee3f7ead6128fb03a9bd90c42dc825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47126d5165d4945d047fad1762feecd082ee3f7ead6128fb03a9bd90c42dc825->leave($__internal_47126d5165d4945d047fad1762feecd082ee3f7ead6128fb03a9bd90c42dc825_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52b761976364ca16862ffc877f4a5bedbbd674479e7f30183d7e6260512a135a = $this->env->getExtension("native_profiler");
        $__internal_52b761976364ca16862ffc877f4a5bedbbd674479e7f30183d7e6260512a135a->enter($__internal_52b761976364ca16862ffc877f4a5bedbbd674479e7f30183d7e6260512a135a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_52b761976364ca16862ffc877f4a5bedbbd674479e7f30183d7e6260512a135a->leave($__internal_52b761976364ca16862ffc877f4a5bedbbd674479e7f30183d7e6260512a135a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
