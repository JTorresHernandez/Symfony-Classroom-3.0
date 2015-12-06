<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d1cd269c3ec15a2fe26f77e69903df9cb64dcd74f83e60087ec2940fb447f5a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73bd3deb429e700223530285c36f20b2406de1c6647ff8c932ae8ead752d1351 = $this->env->getExtension("native_profiler");
        $__internal_73bd3deb429e700223530285c36f20b2406de1c6647ff8c932ae8ead752d1351->enter($__internal_73bd3deb429e700223530285c36f20b2406de1c6647ff8c932ae8ead752d1351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_73bd3deb429e700223530285c36f20b2406de1c6647ff8c932ae8ead752d1351->leave($__internal_73bd3deb429e700223530285c36f20b2406de1c6647ff8c932ae8ead752d1351_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c2780d97f4f2b098640ccfe4c05cdae3056ce241989f11e0b35a99985b44408c = $this->env->getExtension("native_profiler");
        $__internal_c2780d97f4f2b098640ccfe4c05cdae3056ce241989f11e0b35a99985b44408c->enter($__internal_c2780d97f4f2b098640ccfe4c05cdae3056ce241989f11e0b35a99985b44408c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c2780d97f4f2b098640ccfe4c05cdae3056ce241989f11e0b35a99985b44408c->leave($__internal_c2780d97f4f2b098640ccfe4c05cdae3056ce241989f11e0b35a99985b44408c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_082c5f38603dd8be4687e2f163d154d0f9eb3c1dc37032e1f0ea00adfaa7672b = $this->env->getExtension("native_profiler");
        $__internal_082c5f38603dd8be4687e2f163d154d0f9eb3c1dc37032e1f0ea00adfaa7672b->enter($__internal_082c5f38603dd8be4687e2f163d154d0f9eb3c1dc37032e1f0ea00adfaa7672b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_082c5f38603dd8be4687e2f163d154d0f9eb3c1dc37032e1f0ea00adfaa7672b->leave($__internal_082c5f38603dd8be4687e2f163d154d0f9eb3c1dc37032e1f0ea00adfaa7672b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7b0022a60d155104703e10c9df851f64f41d4f9349edd3d339b89f717a56ac77 = $this->env->getExtension("native_profiler");
        $__internal_7b0022a60d155104703e10c9df851f64f41d4f9349edd3d339b89f717a56ac77->enter($__internal_7b0022a60d155104703e10c9df851f64f41d4f9349edd3d339b89f717a56ac77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7b0022a60d155104703e10c9df851f64f41d4f9349edd3d339b89f717a56ac77->leave($__internal_7b0022a60d155104703e10c9df851f64f41d4f9349edd3d339b89f717a56ac77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
