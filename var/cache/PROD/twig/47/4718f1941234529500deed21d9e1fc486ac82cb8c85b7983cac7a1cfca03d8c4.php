<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_e23983ce4336e8ad9239ecfb27fc4586c79412292b765c68fe690102b05c7d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_b35820abc1e841e2b917477a440c72767217966065c3fd195ec857fc0e7f6e6d = $this->env->getExtension("native_profiler");
        $__internal_b35820abc1e841e2b917477a440c72767217966065c3fd195ec857fc0e7f6e6d->enter($__internal_b35820abc1e841e2b917477a440c72767217966065c3fd195ec857fc0e7f6e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b35820abc1e841e2b917477a440c72767217966065c3fd195ec857fc0e7f6e6d->leave($__internal_b35820abc1e841e2b917477a440c72767217966065c3fd195ec857fc0e7f6e6d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16d63b0bd858802ffaaed179cd74fb6aa5ad7c07ceab25b5d711d0395815dd06 = $this->env->getExtension("native_profiler");
        $__internal_16d63b0bd858802ffaaed179cd74fb6aa5ad7c07ceab25b5d711d0395815dd06->enter($__internal_16d63b0bd858802ffaaed179cd74fb6aa5ad7c07ceab25b5d711d0395815dd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_16d63b0bd858802ffaaed179cd74fb6aa5ad7c07ceab25b5d711d0395815dd06->leave($__internal_16d63b0bd858802ffaaed179cd74fb6aa5ad7c07ceab25b5d711d0395815dd06_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
