<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_b7e9d51ce2589a86566b25a9aef8729f1a02678fe56621d6002e639a43bd6f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_f2f684b56ee2985b100d27e26b1bcdbaa9920a8cbe05c2276d5515e745e8509a = $this->env->getExtension("native_profiler");
        $__internal_f2f684b56ee2985b100d27e26b1bcdbaa9920a8cbe05c2276d5515e745e8509a->enter($__internal_f2f684b56ee2985b100d27e26b1bcdbaa9920a8cbe05c2276d5515e745e8509a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f684b56ee2985b100d27e26b1bcdbaa9920a8cbe05c2276d5515e745e8509a->leave($__internal_f2f684b56ee2985b100d27e26b1bcdbaa9920a8cbe05c2276d5515e745e8509a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a84504c669cf3943d6a47209906f131efecda8e4759b19ef50f63007ea6dc9a = $this->env->getExtension("native_profiler");
        $__internal_2a84504c669cf3943d6a47209906f131efecda8e4759b19ef50f63007ea6dc9a->enter($__internal_2a84504c669cf3943d6a47209906f131efecda8e4759b19ef50f63007ea6dc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_2a84504c669cf3943d6a47209906f131efecda8e4759b19ef50f63007ea6dc9a->leave($__internal_2a84504c669cf3943d6a47209906f131efecda8e4759b19ef50f63007ea6dc9a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
