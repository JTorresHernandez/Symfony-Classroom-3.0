<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_e4c3e52fa87db7347ce62a25ce06b30cfa1b8deb2edd8f872a33dcdafbf8bc42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_880ae428d9b074524bad81e770dc99b4c56b593de05b959c299d17b5b9d4629e = $this->env->getExtension("native_profiler");
        $__internal_880ae428d9b074524bad81e770dc99b4c56b593de05b959c299d17b5b9d4629e->enter($__internal_880ae428d9b074524bad81e770dc99b4c56b593de05b959c299d17b5b9d4629e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_880ae428d9b074524bad81e770dc99b4c56b593de05b959c299d17b5b9d4629e->leave($__internal_880ae428d9b074524bad81e770dc99b4c56b593de05b959c299d17b5b9d4629e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ca11c4d270167ea4190c85d6f94839f69e890ce12de8dd06ebf70fbd9eb0421 = $this->env->getExtension("native_profiler");
        $__internal_4ca11c4d270167ea4190c85d6f94839f69e890ce12de8dd06ebf70fbd9eb0421->enter($__internal_4ca11c4d270167ea4190c85d6f94839f69e890ce12de8dd06ebf70fbd9eb0421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_4ca11c4d270167ea4190c85d6f94839f69e890ce12de8dd06ebf70fbd9eb0421->leave($__internal_4ca11c4d270167ea4190c85d6f94839f69e890ce12de8dd06ebf70fbd9eb0421_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
