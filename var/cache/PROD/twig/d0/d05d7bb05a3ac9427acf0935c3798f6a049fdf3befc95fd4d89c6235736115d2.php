<?php

/* UserBundle:Group:show_content.html.twig */
class __TwigTemplate_85ab02e023cbf0d9c40229222bff17aa4f2747dd931c46190df2ca62a725f22f extends Twig_Template
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
        $__internal_72f8aac35e23ca382831e5985b284652062bfa25812de0730b3ebc342b1756de = $this->env->getExtension("native_profiler");
        $__internal_72f8aac35e23ca382831e5985b284652062bfa25812de0730b3ebc342b1756de->enter($__internal_72f8aac35e23ca382831e5985b284652062bfa25812de0730b3ebc342b1756de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show_content.html.twig"));

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
        
        $__internal_72f8aac35e23ca382831e5985b284652062bfa25812de0730b3ebc342b1756de->leave($__internal_72f8aac35e23ca382831e5985b284652062bfa25812de0730b3ebc342b1756de_prof);

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
