<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_bbc573819b1d1824a53586a3f01a662d870d2e7a9fb31eb73158d89a38f43fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ee8926a05bee5d29c524a76ec621ef794da9198739d060cda85785416e41453b = $this->env->getExtension("native_profiler");
        $__internal_ee8926a05bee5d29c524a76ec621ef794da9198739d060cda85785416e41453b->enter($__internal_ee8926a05bee5d29c524a76ec621ef794da9198739d060cda85785416e41453b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee8926a05bee5d29c524a76ec621ef794da9198739d060cda85785416e41453b->leave($__internal_ee8926a05bee5d29c524a76ec621ef794da9198739d060cda85785416e41453b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2c639486cea3adc7775e67e3789f766532372c70bdd4c268e75e14a1d7b00e8 = $this->env->getExtension("native_profiler");
        $__internal_a2c639486cea3adc7775e67e3789f766532372c70bdd4c268e75e14a1d7b00e8->enter($__internal_a2c639486cea3adc7775e67e3789f766532372c70bdd4c268e75e14a1d7b00e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_a2c639486cea3adc7775e67e3789f766532372c70bdd4c268e75e14a1d7b00e8->leave($__internal_a2c639486cea3adc7775e67e3789f766532372c70bdd4c268e75e14a1d7b00e8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
