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
        $__internal_9a95a021cf835d5b5d23526b0c957d1704ea04c32e6da4a718b03bc5885332d4 = $this->env->getExtension("native_profiler");
        $__internal_9a95a021cf835d5b5d23526b0c957d1704ea04c32e6da4a718b03bc5885332d4->enter($__internal_9a95a021cf835d5b5d23526b0c957d1704ea04c32e6da4a718b03bc5885332d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a95a021cf835d5b5d23526b0c957d1704ea04c32e6da4a718b03bc5885332d4->leave($__internal_9a95a021cf835d5b5d23526b0c957d1704ea04c32e6da4a718b03bc5885332d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ad477162251f445e3aaaf053153b107f361d76d7c262698f0cf572426173506 = $this->env->getExtension("native_profiler");
        $__internal_5ad477162251f445e3aaaf053153b107f361d76d7c262698f0cf572426173506->enter($__internal_5ad477162251f445e3aaaf053153b107f361d76d7c262698f0cf572426173506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5ad477162251f445e3aaaf053153b107f361d76d7c262698f0cf572426173506->leave($__internal_5ad477162251f445e3aaaf053153b107f361d76d7c262698f0cf572426173506_prof);

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
