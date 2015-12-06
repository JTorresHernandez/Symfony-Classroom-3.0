<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_2082557c6773e9a9f804de2df946be451e688079fd2ec4f65b966329b922d5b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b2743ee04bec9e53dd24fa2b90a50858508a58b3089ece064335a59190b6c74a = $this->env->getExtension("native_profiler");
        $__internal_b2743ee04bec9e53dd24fa2b90a50858508a58b3089ece064335a59190b6c74a->enter($__internal_b2743ee04bec9e53dd24fa2b90a50858508a58b3089ece064335a59190b6c74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2743ee04bec9e53dd24fa2b90a50858508a58b3089ece064335a59190b6c74a->leave($__internal_b2743ee04bec9e53dd24fa2b90a50858508a58b3089ece064335a59190b6c74a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6da7d19d7d0c038cbb44ba36c77337d25f398bda621357a81657de2d0e3dd115 = $this->env->getExtension("native_profiler");
        $__internal_6da7d19d7d0c038cbb44ba36c77337d25f398bda621357a81657de2d0e3dd115->enter($__internal_6da7d19d7d0c038cbb44ba36c77337d25f398bda621357a81657de2d0e3dd115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_6da7d19d7d0c038cbb44ba36c77337d25f398bda621357a81657de2d0e3dd115->leave($__internal_6da7d19d7d0c038cbb44ba36c77337d25f398bda621357a81657de2d0e3dd115_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
