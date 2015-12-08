<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_07a54bdb80be2d45f3b021141834ee448b4440e6b3b357b74a893d2c71939c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_1c530585406655625a5731a90629749b45fce9099c10b0b39c4f7032c0f7a4e5 = $this->env->getExtension("native_profiler");
        $__internal_1c530585406655625a5731a90629749b45fce9099c10b0b39c4f7032c0f7a4e5->enter($__internal_1c530585406655625a5731a90629749b45fce9099c10b0b39c4f7032c0f7a4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c530585406655625a5731a90629749b45fce9099c10b0b39c4f7032c0f7a4e5->leave($__internal_1c530585406655625a5731a90629749b45fce9099c10b0b39c4f7032c0f7a4e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea8d0fd8182a51b82f883307a3dd2b3e14aaf2f47667336b0bd038563b5dc8d4 = $this->env->getExtension("native_profiler");
        $__internal_ea8d0fd8182a51b82f883307a3dd2b3e14aaf2f47667336b0bd038563b5dc8d4->enter($__internal_ea8d0fd8182a51b82f883307a3dd2b3e14aaf2f47667336b0bd038563b5dc8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ea8d0fd8182a51b82f883307a3dd2b3e14aaf2f47667336b0bd038563b5dc8d4->leave($__internal_ea8d0fd8182a51b82f883307a3dd2b3e14aaf2f47667336b0bd038563b5dc8d4_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
