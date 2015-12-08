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
        $__internal_d0e1b27df67d1989bcae7ee8039a52b2ea45b623598f5a9b38404ff5d5f24349 = $this->env->getExtension("native_profiler");
        $__internal_d0e1b27df67d1989bcae7ee8039a52b2ea45b623598f5a9b38404ff5d5f24349->enter($__internal_d0e1b27df67d1989bcae7ee8039a52b2ea45b623598f5a9b38404ff5d5f24349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0e1b27df67d1989bcae7ee8039a52b2ea45b623598f5a9b38404ff5d5f24349->leave($__internal_d0e1b27df67d1989bcae7ee8039a52b2ea45b623598f5a9b38404ff5d5f24349_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04b79135ad1b1a78458391aa9ba675ab7a35797f97a87a0b0751c42f5f06a43b = $this->env->getExtension("native_profiler");
        $__internal_04b79135ad1b1a78458391aa9ba675ab7a35797f97a87a0b0751c42f5f06a43b->enter($__internal_04b79135ad1b1a78458391aa9ba675ab7a35797f97a87a0b0751c42f5f06a43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_04b79135ad1b1a78458391aa9ba675ab7a35797f97a87a0b0751c42f5f06a43b->leave($__internal_04b79135ad1b1a78458391aa9ba675ab7a35797f97a87a0b0751c42f5f06a43b_prof);

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
