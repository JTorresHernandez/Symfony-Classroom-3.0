<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e04b3b0ad0aa56a2e1421c9da605f497d0c3defc1debc8595c724746d9900166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_039a91c791032c70f3dea166c93dd72cb948dd154667a81aaee91317f833a842 = $this->env->getExtension("native_profiler");
        $__internal_039a91c791032c70f3dea166c93dd72cb948dd154667a81aaee91317f833a842->enter($__internal_039a91c791032c70f3dea166c93dd72cb948dd154667a81aaee91317f833a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_039a91c791032c70f3dea166c93dd72cb948dd154667a81aaee91317f833a842->leave($__internal_039a91c791032c70f3dea166c93dd72cb948dd154667a81aaee91317f833a842_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_856af431a1912ce944356019580562cc3d9da630443dc811a729493dc05f3dd7 = $this->env->getExtension("native_profiler");
        $__internal_856af431a1912ce944356019580562cc3d9da630443dc811a729493dc05f3dd7->enter($__internal_856af431a1912ce944356019580562cc3d9da630443dc811a729493dc05f3dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_856af431a1912ce944356019580562cc3d9da630443dc811a729493dc05f3dd7->leave($__internal_856af431a1912ce944356019580562cc3d9da630443dc811a729493dc05f3dd7_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:checkEmail.html.twig";
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
