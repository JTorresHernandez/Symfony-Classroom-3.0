<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_86e3db46e16810663148806fbf958317f7208c098fa67db480fd2e75ffbf6aa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:show.html.twig", 1);
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
        $__internal_c4fa36bcc67fd9fc66606493074432d68ab840a2594e288009f446572f8a4043 = $this->env->getExtension("native_profiler");
        $__internal_c4fa36bcc67fd9fc66606493074432d68ab840a2594e288009f446572f8a4043->enter($__internal_c4fa36bcc67fd9fc66606493074432d68ab840a2594e288009f446572f8a4043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4fa36bcc67fd9fc66606493074432d68ab840a2594e288009f446572f8a4043->leave($__internal_c4fa36bcc67fd9fc66606493074432d68ab840a2594e288009f446572f8a4043_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0795fb3b149595e615b6e3e652c1c2b85208099cb872db646b1a7b21ae5a2d75 = $this->env->getExtension("native_profiler");
        $__internal_0795fb3b149595e615b6e3e652c1c2b85208099cb872db646b1a7b21ae5a2d75->enter($__internal_0795fb3b149595e615b6e3e652c1c2b85208099cb872db646b1a7b21ae5a2d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0795fb3b149595e615b6e3e652c1c2b85208099cb872db646b1a7b21ae5a2d75->leave($__internal_0795fb3b149595e615b6e3e652c1c2b85208099cb872db646b1a7b21ae5a2d75_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
