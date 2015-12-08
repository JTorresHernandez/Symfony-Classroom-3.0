<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_1fd14af311dd7534beb8c415706b4cbe747a9447c97a2cd30d7597a971854e79 extends Twig_Template
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
        $__internal_46be9534dd42414093e3e4b814c7d6fc8163c30287e1471dfaea15efc8790402 = $this->env->getExtension("native_profiler");
        $__internal_46be9534dd42414093e3e4b814c7d6fc8163c30287e1471dfaea15efc8790402->enter($__internal_46be9534dd42414093e3e4b814c7d6fc8163c30287e1471dfaea15efc8790402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46be9534dd42414093e3e4b814c7d6fc8163c30287e1471dfaea15efc8790402->leave($__internal_46be9534dd42414093e3e4b814c7d6fc8163c30287e1471dfaea15efc8790402_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_512e0469a4cddbb1de931bf82df4d535de0f2e4f3210181c4ed02829ca19f5bf = $this->env->getExtension("native_profiler");
        $__internal_512e0469a4cddbb1de931bf82df4d535de0f2e4f3210181c4ed02829ca19f5bf->enter($__internal_512e0469a4cddbb1de931bf82df4d535de0f2e4f3210181c4ed02829ca19f5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_512e0469a4cddbb1de931bf82df4d535de0f2e4f3210181c4ed02829ca19f5bf->leave($__internal_512e0469a4cddbb1de931bf82df4d535de0f2e4f3210181c4ed02829ca19f5bf_prof);

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
