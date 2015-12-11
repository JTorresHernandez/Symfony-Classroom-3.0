<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_fc2e4357f2da33b690c0c3a6a74a2bce4d156c5b36891f3930b6d7dfadce11e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:show.html.twig", 1);
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
        $__internal_834205c7c55c7bbefdee3935a607b34f023a92b0b6412a2828982e7b032ceb30 = $this->env->getExtension("native_profiler");
        $__internal_834205c7c55c7bbefdee3935a607b34f023a92b0b6412a2828982e7b032ceb30->enter($__internal_834205c7c55c7bbefdee3935a607b34f023a92b0b6412a2828982e7b032ceb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_834205c7c55c7bbefdee3935a607b34f023a92b0b6412a2828982e7b032ceb30->leave($__internal_834205c7c55c7bbefdee3935a607b34f023a92b0b6412a2828982e7b032ceb30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e5a465cd53298ce0f4cad246da004fee76009bb812f6aba41f3f8564b9ff4d9 = $this->env->getExtension("native_profiler");
        $__internal_1e5a465cd53298ce0f4cad246da004fee76009bb812f6aba41f3f8564b9ff4d9->enter($__internal_1e5a465cd53298ce0f4cad246da004fee76009bb812f6aba41f3f8564b9ff4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1e5a465cd53298ce0f4cad246da004fee76009bb812f6aba41f3f8564b9ff4d9->leave($__internal_1e5a465cd53298ce0f4cad246da004fee76009bb812f6aba41f3f8564b9ff4d9_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
