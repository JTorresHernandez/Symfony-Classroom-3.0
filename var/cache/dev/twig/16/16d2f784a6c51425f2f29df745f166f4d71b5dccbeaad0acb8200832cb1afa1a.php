<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_a50f8de56e02850bdade0887abb5b10ad276cdd88336b30b7a55e616394ed242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_a87dbc9ff6f2824b857acbe51d3b925791990369ea75c73ca50b9b4f5263c7a4 = $this->env->getExtension("native_profiler");
        $__internal_a87dbc9ff6f2824b857acbe51d3b925791990369ea75c73ca50b9b4f5263c7a4->enter($__internal_a87dbc9ff6f2824b857acbe51d3b925791990369ea75c73ca50b9b4f5263c7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a87dbc9ff6f2824b857acbe51d3b925791990369ea75c73ca50b9b4f5263c7a4->leave($__internal_a87dbc9ff6f2824b857acbe51d3b925791990369ea75c73ca50b9b4f5263c7a4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4887cd19f3891a1edb52ac005c8818b55a8fe890fb6a271b9c9c4c6579017b06 = $this->env->getExtension("native_profiler");
        $__internal_4887cd19f3891a1edb52ac005c8818b55a8fe890fb6a271b9c9c4c6579017b06->enter($__internal_4887cd19f3891a1edb52ac005c8818b55a8fe890fb6a271b9c9c4c6579017b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4887cd19f3891a1edb52ac005c8818b55a8fe890fb6a271b9c9c4c6579017b06->leave($__internal_4887cd19f3891a1edb52ac005c8818b55a8fe890fb6a271b9c9c4c6579017b06_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
