<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ec948a1b370a713e60683e243a13efaa481a076572565382c741a60f843f1e98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d327ce4573c35395c3a570b2fc8ed6f584e5442baf595953823fd33aa3cce78c = $this->env->getExtension("native_profiler");
        $__internal_d327ce4573c35395c3a570b2fc8ed6f584e5442baf595953823fd33aa3cce78c->enter($__internal_d327ce4573c35395c3a570b2fc8ed6f584e5442baf595953823fd33aa3cce78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d327ce4573c35395c3a570b2fc8ed6f584e5442baf595953823fd33aa3cce78c->leave($__internal_d327ce4573c35395c3a570b2fc8ed6f584e5442baf595953823fd33aa3cce78c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6e838ed40d394576e179db6b571d5c655d9c00aa58578aa6c4b8ef8643f32c2 = $this->env->getExtension("native_profiler");
        $__internal_f6e838ed40d394576e179db6b571d5c655d9c00aa58578aa6c4b8ef8643f32c2->enter($__internal_f6e838ed40d394576e179db6b571d5c655d9c00aa58578aa6c4b8ef8643f32c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f6e838ed40d394576e179db6b571d5c655d9c00aa58578aa6c4b8ef8643f32c2->leave($__internal_f6e838ed40d394576e179db6b571d5c655d9c00aa58578aa6c4b8ef8643f32c2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
