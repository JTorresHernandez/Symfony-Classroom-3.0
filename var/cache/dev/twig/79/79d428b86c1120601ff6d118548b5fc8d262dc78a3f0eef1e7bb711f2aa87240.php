<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_edc956a4bcdd4155f84f40b392b9247a6bdb8c18aa6122dc6683b4fc18661ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_91e48ad965bda602352b722dd8298664b78f8425be06daf60ead9d9d75a09cef = $this->env->getExtension("native_profiler");
        $__internal_91e48ad965bda602352b722dd8298664b78f8425be06daf60ead9d9d75a09cef->enter($__internal_91e48ad965bda602352b722dd8298664b78f8425be06daf60ead9d9d75a09cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e48ad965bda602352b722dd8298664b78f8425be06daf60ead9d9d75a09cef->leave($__internal_91e48ad965bda602352b722dd8298664b78f8425be06daf60ead9d9d75a09cef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82fef9d80a5fb775643b3765b7db8395c25355cb807485b3fc9bc567d852a405 = $this->env->getExtension("native_profiler");
        $__internal_82fef9d80a5fb775643b3765b7db8395c25355cb807485b3fc9bc567d852a405->enter($__internal_82fef9d80a5fb775643b3765b7db8395c25355cb807485b3fc9bc567d852a405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_82fef9d80a5fb775643b3765b7db8395c25355cb807485b3fc9bc567d852a405->leave($__internal_82fef9d80a5fb775643b3765b7db8395c25355cb807485b3fc9bc567d852a405_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:changePassword.html.twig";
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
