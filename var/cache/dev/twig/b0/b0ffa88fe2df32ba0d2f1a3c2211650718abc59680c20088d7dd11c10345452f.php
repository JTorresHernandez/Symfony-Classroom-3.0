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
        $__internal_641b22a50541829a287059343ee986223ba8f952fb5dcc6c95ee23e391329db3 = $this->env->getExtension("native_profiler");
        $__internal_641b22a50541829a287059343ee986223ba8f952fb5dcc6c95ee23e391329db3->enter($__internal_641b22a50541829a287059343ee986223ba8f952fb5dcc6c95ee23e391329db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_641b22a50541829a287059343ee986223ba8f952fb5dcc6c95ee23e391329db3->leave($__internal_641b22a50541829a287059343ee986223ba8f952fb5dcc6c95ee23e391329db3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ff8c3fad0c7187520214abb685d646b8a074577a071fa4a9ae3b267fecbd3fe = $this->env->getExtension("native_profiler");
        $__internal_5ff8c3fad0c7187520214abb685d646b8a074577a071fa4a9ae3b267fecbd3fe->enter($__internal_5ff8c3fad0c7187520214abb685d646b8a074577a071fa4a9ae3b267fecbd3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5ff8c3fad0c7187520214abb685d646b8a074577a071fa4a9ae3b267fecbd3fe->leave($__internal_5ff8c3fad0c7187520214abb685d646b8a074577a071fa4a9ae3b267fecbd3fe_prof);

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
