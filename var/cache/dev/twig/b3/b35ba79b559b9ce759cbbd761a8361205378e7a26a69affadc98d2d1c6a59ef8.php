<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5f237135c272fa03961b1179f2f93a42f43ccc1cad6ec5275fc24450830e000c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_e4acc46748a48c7208aff3d5eb9644549206bab2ddde6560f1c9e2d4ddcd7c7f = $this->env->getExtension("native_profiler");
        $__internal_e4acc46748a48c7208aff3d5eb9644549206bab2ddde6560f1c9e2d4ddcd7c7f->enter($__internal_e4acc46748a48c7208aff3d5eb9644549206bab2ddde6560f1c9e2d4ddcd7c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4acc46748a48c7208aff3d5eb9644549206bab2ddde6560f1c9e2d4ddcd7c7f->leave($__internal_e4acc46748a48c7208aff3d5eb9644549206bab2ddde6560f1c9e2d4ddcd7c7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97e9344319c78f68ea408bb544e71a18df1d320273916821964d61a9197dbdec = $this->env->getExtension("native_profiler");
        $__internal_97e9344319c78f68ea408bb544e71a18df1d320273916821964d61a9197dbdec->enter($__internal_97e9344319c78f68ea408bb544e71a18df1d320273916821964d61a9197dbdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_97e9344319c78f68ea408bb544e71a18df1d320273916821964d61a9197dbdec->leave($__internal_97e9344319c78f68ea408bb544e71a18df1d320273916821964d61a9197dbdec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
