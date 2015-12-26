<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_5bac78f30311d7c4e3fe088b91ce72b83ca09331af3f3f9e73160ceb1aac9d96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_ff876c76d1654930ee76a0c1cf52487c94a6f1c85bbd55bc579540b606dcb8b5 = $this->env->getExtension("native_profiler");
        $__internal_ff876c76d1654930ee76a0c1cf52487c94a6f1c85bbd55bc579540b606dcb8b5->enter($__internal_ff876c76d1654930ee76a0c1cf52487c94a6f1c85bbd55bc579540b606dcb8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff876c76d1654930ee76a0c1cf52487c94a6f1c85bbd55bc579540b606dcb8b5->leave($__internal_ff876c76d1654930ee76a0c1cf52487c94a6f1c85bbd55bc579540b606dcb8b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d80545cadc6316e4787f1ffb54f604bb5e243f59becd9ed0401cd8636df23b8a = $this->env->getExtension("native_profiler");
        $__internal_d80545cadc6316e4787f1ffb54f604bb5e243f59becd9ed0401cd8636df23b8a->enter($__internal_d80545cadc6316e4787f1ffb54f604bb5e243f59becd9ed0401cd8636df23b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_d80545cadc6316e4787f1ffb54f604bb5e243f59becd9ed0401cd8636df23b8a->leave($__internal_d80545cadc6316e4787f1ffb54f604bb5e243f59becd9ed0401cd8636df23b8a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
