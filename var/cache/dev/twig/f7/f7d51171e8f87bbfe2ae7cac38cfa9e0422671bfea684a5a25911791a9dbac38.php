<?php

/* UserBundle:Group:show_content.html.twig */
class __TwigTemplate_4214b05c4f5089778fa29ca78abe15410828f8c4951b3653a1fda9cfa22e149a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eacc354b79520aecd0f02af51e25ae67bb0756e8be83e7f53b9d671c8fd59b86 = $this->env->getExtension("native_profiler");
        $__internal_eacc354b79520aecd0f02af51e25ae67bb0756e8be83e7f53b9d671c8fd59b86->enter($__internal_eacc354b79520aecd0f02af51e25ae67bb0756e8be83e7f53b9d671c8fd59b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_eacc354b79520aecd0f02af51e25ae67bb0756e8be83e7f53b9d671c8fd59b86->leave($__internal_eacc354b79520aecd0f02af51e25ae67bb0756e8be83e7f53b9d671c8fd59b86_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */