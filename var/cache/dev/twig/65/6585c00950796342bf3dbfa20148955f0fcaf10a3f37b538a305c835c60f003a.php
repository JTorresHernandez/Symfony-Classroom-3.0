<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_063ac1124370a3832275364d7c03cf1ca6bd50aae3054e8e2aaa76dcb237e10e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_6d2150a6f00ee348ebe802d428f0448e4cd506e7c121ddb034def2720ab9bd61 = $this->env->getExtension("native_profiler");
        $__internal_6d2150a6f00ee348ebe802d428f0448e4cd506e7c121ddb034def2720ab9bd61->enter($__internal_6d2150a6f00ee348ebe802d428f0448e4cd506e7c121ddb034def2720ab9bd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d2150a6f00ee348ebe802d428f0448e4cd506e7c121ddb034def2720ab9bd61->leave($__internal_6d2150a6f00ee348ebe802d428f0448e4cd506e7c121ddb034def2720ab9bd61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_938b7ada4bdd25a3e01476a969bb4b1c33ba3c8b6aee509b45bb6f6c454e414c = $this->env->getExtension("native_profiler");
        $__internal_938b7ada4bdd25a3e01476a969bb4b1c33ba3c8b6aee509b45bb6f6c454e414c->enter($__internal_938b7ada4bdd25a3e01476a969bb4b1c33ba3c8b6aee509b45bb6f6c454e414c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_938b7ada4bdd25a3e01476a969bb4b1c33ba3c8b6aee509b45bb6f6c454e414c->leave($__internal_938b7ada4bdd25a3e01476a969bb4b1c33ba3c8b6aee509b45bb6f6c454e414c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
