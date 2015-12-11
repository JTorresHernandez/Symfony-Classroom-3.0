<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_be1aafc60b13d6a479813600509f58ea55b00cb63c7b4a435824ffceb3603a60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:show.html.twig", 1);
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
        $__internal_97d6badc7a9dddcc65bbf92950dde7488c1c4868d354bb5b6eb92bd0141d4884 = $this->env->getExtension("native_profiler");
        $__internal_97d6badc7a9dddcc65bbf92950dde7488c1c4868d354bb5b6eb92bd0141d4884->enter($__internal_97d6badc7a9dddcc65bbf92950dde7488c1c4868d354bb5b6eb92bd0141d4884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97d6badc7a9dddcc65bbf92950dde7488c1c4868d354bb5b6eb92bd0141d4884->leave($__internal_97d6badc7a9dddcc65bbf92950dde7488c1c4868d354bb5b6eb92bd0141d4884_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d705efb879270ed808877cced0adec85eb0d904d75f172dc26a10fd4920cd04 = $this->env->getExtension("native_profiler");
        $__internal_6d705efb879270ed808877cced0adec85eb0d904d75f172dc26a10fd4920cd04->enter($__internal_6d705efb879270ed808877cced0adec85eb0d904d75f172dc26a10fd4920cd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6d705efb879270ed808877cced0adec85eb0d904d75f172dc26a10fd4920cd04->leave($__internal_6d705efb879270ed808877cced0adec85eb0d904d75f172dc26a10fd4920cd04_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
