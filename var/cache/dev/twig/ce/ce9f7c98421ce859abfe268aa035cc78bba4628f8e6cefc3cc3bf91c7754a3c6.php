<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_70943241f8fac559eb9706986f3fa87b33c4b70519af059a9c928d74cb5e2716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d4cf615f243b67f7511404f801d6d55f242e17cc5dbcb5f5e4c6fb8384b20adf = $this->env->getExtension("native_profiler");
        $__internal_d4cf615f243b67f7511404f801d6d55f242e17cc5dbcb5f5e4c6fb8384b20adf->enter($__internal_d4cf615f243b67f7511404f801d6d55f242e17cc5dbcb5f5e4c6fb8384b20adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4cf615f243b67f7511404f801d6d55f242e17cc5dbcb5f5e4c6fb8384b20adf->leave($__internal_d4cf615f243b67f7511404f801d6d55f242e17cc5dbcb5f5e4c6fb8384b20adf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3f75566f0e880940fffe15fea49334d5a34c613c635659b877f3a20bf81d970 = $this->env->getExtension("native_profiler");
        $__internal_d3f75566f0e880940fffe15fea49334d5a34c613c635659b877f3a20bf81d970->enter($__internal_d3f75566f0e880940fffe15fea49334d5a34c613c635659b877f3a20bf81d970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d3f75566f0e880940fffe15fea49334d5a34c613c635659b877f3a20bf81d970->leave($__internal_d3f75566f0e880940fffe15fea49334d5a34c613c635659b877f3a20bf81d970_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
