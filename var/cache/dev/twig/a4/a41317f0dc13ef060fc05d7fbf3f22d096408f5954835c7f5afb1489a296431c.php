<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_866f6f01f8e6be6fcf90cbff8b71ede47bd3fd81cbbd75f8463e561ca4cfedb4 extends Twig_Template
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
        $__internal_3c347df704e4e246f1d7f653aecdb5737ee8edd57b188ad819bbaf9a99a0bc52 = $this->env->getExtension("native_profiler");
        $__internal_3c347df704e4e246f1d7f653aecdb5737ee8edd57b188ad819bbaf9a99a0bc52->enter($__internal_3c347df704e4e246f1d7f653aecdb5737ee8edd57b188ad819bbaf9a99a0bc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_3c347df704e4e246f1d7f653aecdb5737ee8edd57b188ad819bbaf9a99a0bc52->leave($__internal_3c347df704e4e246f1d7f653aecdb5737ee8edd57b188ad819bbaf9a99a0bc52_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
