<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_47bfccb15b624bd56960102802e6544b55a61ffc6baf5a54407ac4357a1e9028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_6b40fb425cd9b5fbc23ff7522c9cd77bf5ffe9ed60d02f60a79010f33522408b = $this->env->getExtension("native_profiler");
        $__internal_6b40fb425cd9b5fbc23ff7522c9cd77bf5ffe9ed60d02f60a79010f33522408b->enter($__internal_6b40fb425cd9b5fbc23ff7522c9cd77bf5ffe9ed60d02f60a79010f33522408b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b40fb425cd9b5fbc23ff7522c9cd77bf5ffe9ed60d02f60a79010f33522408b->leave($__internal_6b40fb425cd9b5fbc23ff7522c9cd77bf5ffe9ed60d02f60a79010f33522408b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5f37acad246f32bb493a6c3bdcbebeaaa7d6dba3e49f00fd29e21598cf0e365 = $this->env->getExtension("native_profiler");
        $__internal_b5f37acad246f32bb493a6c3bdcbebeaaa7d6dba3e49f00fd29e21598cf0e365->enter($__internal_b5f37acad246f32bb493a6c3bdcbebeaaa7d6dba3e49f00fd29e21598cf0e365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b5f37acad246f32bb493a6c3bdcbebeaaa7d6dba3e49f00fd29e21598cf0e365->leave($__internal_b5f37acad246f32bb493a6c3bdcbebeaaa7d6dba3e49f00fd29e21598cf0e365_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
