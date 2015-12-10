<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_8f20365a5c8ba28c9023e8b4fbb53afe90df6e39def4a4ab583b95f9884bb45b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_a9d2125ce7d48cd007d04019ade67352193589b2583fcae292b1c0ae190a4290 = $this->env->getExtension("native_profiler");
        $__internal_a9d2125ce7d48cd007d04019ade67352193589b2583fcae292b1c0ae190a4290->enter($__internal_a9d2125ce7d48cd007d04019ade67352193589b2583fcae292b1c0ae190a4290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9d2125ce7d48cd007d04019ade67352193589b2583fcae292b1c0ae190a4290->leave($__internal_a9d2125ce7d48cd007d04019ade67352193589b2583fcae292b1c0ae190a4290_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_228e386294c2ee48da2d7d8fa8928f223deeef5e16a3ef523894c728c1c8fd24 = $this->env->getExtension("native_profiler");
        $__internal_228e386294c2ee48da2d7d8fa8928f223deeef5e16a3ef523894c728c1c8fd24->enter($__internal_228e386294c2ee48da2d7d8fa8928f223deeef5e16a3ef523894c728c1c8fd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_228e386294c2ee48da2d7d8fa8928f223deeef5e16a3ef523894c728c1c8fd24->leave($__internal_228e386294c2ee48da2d7d8fa8928f223deeef5e16a3ef523894c728c1c8fd24_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
