<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_fd62b0c59f3f975f69de335371f7a65dbb5693edaa5818c7838689a851015aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_20a11257b3644b4f947956823ee23553ab0ae4255f4607a4ed1b39954ee05a8d = $this->env->getExtension("native_profiler");
        $__internal_20a11257b3644b4f947956823ee23553ab0ae4255f4607a4ed1b39954ee05a8d->enter($__internal_20a11257b3644b4f947956823ee23553ab0ae4255f4607a4ed1b39954ee05a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20a11257b3644b4f947956823ee23553ab0ae4255f4607a4ed1b39954ee05a8d->leave($__internal_20a11257b3644b4f947956823ee23553ab0ae4255f4607a4ed1b39954ee05a8d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14151dc27b3d2cefdd83e4094192dd0af4d8370546253bf51b0f4a5c87223e07 = $this->env->getExtension("native_profiler");
        $__internal_14151dc27b3d2cefdd83e4094192dd0af4d8370546253bf51b0f4a5c87223e07->enter($__internal_14151dc27b3d2cefdd83e4094192dd0af4d8370546253bf51b0f4a5c87223e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_14151dc27b3d2cefdd83e4094192dd0af4d8370546253bf51b0f4a5c87223e07->leave($__internal_14151dc27b3d2cefdd83e4094192dd0af4d8370546253bf51b0f4a5c87223e07_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
