<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_4fa89d7b15c1a9d1f4dd61e557793c3dda2c31fe62020f8b14199fb59899036b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:new.html.twig", 1);
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
        $__internal_552a80211818e186749e4da757046d677ce3a8f34a2a4d9fe59876bee534e0f4 = $this->env->getExtension("native_profiler");
        $__internal_552a80211818e186749e4da757046d677ce3a8f34a2a4d9fe59876bee534e0f4->enter($__internal_552a80211818e186749e4da757046d677ce3a8f34a2a4d9fe59876bee534e0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_552a80211818e186749e4da757046d677ce3a8f34a2a4d9fe59876bee534e0f4->leave($__internal_552a80211818e186749e4da757046d677ce3a8f34a2a4d9fe59876bee534e0f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6a61bc8ce01a99485115a658b2b6946a3968090e1ec7f57ba582e8fa2f4af0b = $this->env->getExtension("native_profiler");
        $__internal_a6a61bc8ce01a99485115a658b2b6946a3968090e1ec7f57ba582e8fa2f4af0b->enter($__internal_a6a61bc8ce01a99485115a658b2b6946a3968090e1ec7f57ba582e8fa2f4af0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a6a61bc8ce01a99485115a658b2b6946a3968090e1ec7f57ba582e8fa2f4af0b->leave($__internal_a6a61bc8ce01a99485115a658b2b6946a3968090e1ec7f57ba582e8fa2f4af0b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:new.html.twig";
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
