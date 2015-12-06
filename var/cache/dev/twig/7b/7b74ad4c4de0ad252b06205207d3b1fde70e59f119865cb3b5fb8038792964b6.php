<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a15cc81b82c9c162f6e4fe68314d3592138846ac46514314cd83b93319522dcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4867b4c877864adcd0af85b707c6b8773eb8a5186c392bcf58f55db5ea6a5ec7 = $this->env->getExtension("native_profiler");
        $__internal_4867b4c877864adcd0af85b707c6b8773eb8a5186c392bcf58f55db5ea6a5ec7->enter($__internal_4867b4c877864adcd0af85b707c6b8773eb8a5186c392bcf58f55db5ea6a5ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4867b4c877864adcd0af85b707c6b8773eb8a5186c392bcf58f55db5ea6a5ec7->leave($__internal_4867b4c877864adcd0af85b707c6b8773eb8a5186c392bcf58f55db5ea6a5ec7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae3b8d16d25cce1a8509231120c92d807ed72d257d4c8841f4a214365af37ee1 = $this->env->getExtension("native_profiler");
        $__internal_ae3b8d16d25cce1a8509231120c92d807ed72d257d4c8841f4a214365af37ee1->enter($__internal_ae3b8d16d25cce1a8509231120c92d807ed72d257d4c8841f4a214365af37ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ae3b8d16d25cce1a8509231120c92d807ed72d257d4c8841f4a214365af37ee1->leave($__internal_ae3b8d16d25cce1a8509231120c92d807ed72d257d4c8841f4a214365af37ee1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
