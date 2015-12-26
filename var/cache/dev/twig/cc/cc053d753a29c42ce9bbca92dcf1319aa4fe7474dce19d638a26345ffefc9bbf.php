<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_5b2e4ed71a178c0a946720ab6999d7e9dc33cb4db6f8982e3428f37352326290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_fd87d7b59af2e7f7cca49e9ac49813c945588bf17e59eace3dbe4b91bbde5cae = $this->env->getExtension("native_profiler");
        $__internal_fd87d7b59af2e7f7cca49e9ac49813c945588bf17e59eace3dbe4b91bbde5cae->enter($__internal_fd87d7b59af2e7f7cca49e9ac49813c945588bf17e59eace3dbe4b91bbde5cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd87d7b59af2e7f7cca49e9ac49813c945588bf17e59eace3dbe4b91bbde5cae->leave($__internal_fd87d7b59af2e7f7cca49e9ac49813c945588bf17e59eace3dbe4b91bbde5cae_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b7a507aef6e6520c4bd161cbb0d1fccc7f8a43900ad081f1ada240e478663f6 = $this->env->getExtension("native_profiler");
        $__internal_5b7a507aef6e6520c4bd161cbb0d1fccc7f8a43900ad081f1ada240e478663f6->enter($__internal_5b7a507aef6e6520c4bd161cbb0d1fccc7f8a43900ad081f1ada240e478663f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5b7a507aef6e6520c4bd161cbb0d1fccc7f8a43900ad081f1ada240e478663f6->leave($__internal_5b7a507aef6e6520c4bd161cbb0d1fccc7f8a43900ad081f1ada240e478663f6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
