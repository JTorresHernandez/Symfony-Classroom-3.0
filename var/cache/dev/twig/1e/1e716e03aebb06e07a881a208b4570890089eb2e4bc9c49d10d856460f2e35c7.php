<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_04c2c131a5abbf59c98ad8f6124a20700662f44d8469cd01c604e03644c148ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_3fce3176e8f18ff6bc081b3425da8046523cbd45c0d084b7f5f29564c3f1d3c0 = $this->env->getExtension("native_profiler");
        $__internal_3fce3176e8f18ff6bc081b3425da8046523cbd45c0d084b7f5f29564c3f1d3c0->enter($__internal_3fce3176e8f18ff6bc081b3425da8046523cbd45c0d084b7f5f29564c3f1d3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fce3176e8f18ff6bc081b3425da8046523cbd45c0d084b7f5f29564c3f1d3c0->leave($__internal_3fce3176e8f18ff6bc081b3425da8046523cbd45c0d084b7f5f29564c3f1d3c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6c943a675945b3c7f4e40f89ece1d970af595484d6c09ef36e6c1addcd91284 = $this->env->getExtension("native_profiler");
        $__internal_e6c943a675945b3c7f4e40f89ece1d970af595484d6c09ef36e6c1addcd91284->enter($__internal_e6c943a675945b3c7f4e40f89ece1d970af595484d6c09ef36e6c1addcd91284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_e6c943a675945b3c7f4e40f89ece1d970af595484d6c09ef36e6c1addcd91284->leave($__internal_e6c943a675945b3c7f4e40f89ece1d970af595484d6c09ef36e6c1addcd91284_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
