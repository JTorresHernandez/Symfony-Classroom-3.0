<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_d57883c3a0fe644e743610b81c8b73f9e86d1769a33a631aa755ca49a6296bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_57cf59000136416b763cbfd850619eb0e9e804782a3a18ec7f6d420e1513e03d = $this->env->getExtension("native_profiler");
        $__internal_57cf59000136416b763cbfd850619eb0e9e804782a3a18ec7f6d420e1513e03d->enter($__internal_57cf59000136416b763cbfd850619eb0e9e804782a3a18ec7f6d420e1513e03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57cf59000136416b763cbfd850619eb0e9e804782a3a18ec7f6d420e1513e03d->leave($__internal_57cf59000136416b763cbfd850619eb0e9e804782a3a18ec7f6d420e1513e03d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28a258134af98c8ca5551ac13712176049d315cdb066b8e0ae688a9287a09363 = $this->env->getExtension("native_profiler");
        $__internal_28a258134af98c8ca5551ac13712176049d315cdb066b8e0ae688a9287a09363->enter($__internal_28a258134af98c8ca5551ac13712176049d315cdb066b8e0ae688a9287a09363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_28a258134af98c8ca5551ac13712176049d315cdb066b8e0ae688a9287a09363->leave($__internal_28a258134af98c8ca5551ac13712176049d315cdb066b8e0ae688a9287a09363_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
