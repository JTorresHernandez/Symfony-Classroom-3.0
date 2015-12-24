<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_3322a17322d9b37e954455b7d43aa0919e7a9671b8d7d2a7866d814cdc58cb0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_5143b870e76244e24a56174d7f86ec4d56fd9cc024044c66dc08ce1a927fc561 = $this->env->getExtension("native_profiler");
        $__internal_5143b870e76244e24a56174d7f86ec4d56fd9cc024044c66dc08ce1a927fc561->enter($__internal_5143b870e76244e24a56174d7f86ec4d56fd9cc024044c66dc08ce1a927fc561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5143b870e76244e24a56174d7f86ec4d56fd9cc024044c66dc08ce1a927fc561->leave($__internal_5143b870e76244e24a56174d7f86ec4d56fd9cc024044c66dc08ce1a927fc561_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71fead83d338041527bb79d76843129a97121c6e05df57624941a2c848ebffed = $this->env->getExtension("native_profiler");
        $__internal_71fead83d338041527bb79d76843129a97121c6e05df57624941a2c848ebffed->enter($__internal_71fead83d338041527bb79d76843129a97121c6e05df57624941a2c848ebffed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_71fead83d338041527bb79d76843129a97121c6e05df57624941a2c848ebffed->leave($__internal_71fead83d338041527bb79d76843129a97121c6e05df57624941a2c848ebffed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
