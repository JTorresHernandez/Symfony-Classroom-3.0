<?php

/* UserBundle:Group:show_content.html.twig */
class __TwigTemplate_08ad31fd372aabe5b92ce1d698442bc554992cca2374cc1ca4a9be7b70c62deb extends Twig_Template
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
        $__internal_9a2c5ebd8ab6b33f075c3845ed5df1e70b6e723d0cf32b1b5124e9387e88a0a4 = $this->env->getExtension("native_profiler");
        $__internal_9a2c5ebd8ab6b33f075c3845ed5df1e70b6e723d0cf32b1b5124e9387e88a0a4->enter($__internal_9a2c5ebd8ab6b33f075c3845ed5df1e70b6e723d0cf32b1b5124e9387e88a0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show_content.html.twig"));

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
        
        $__internal_9a2c5ebd8ab6b33f075c3845ed5df1e70b6e723d0cf32b1b5124e9387e88a0a4->leave($__internal_9a2c5ebd8ab6b33f075c3845ed5df1e70b6e723d0cf32b1b5124e9387e88a0a4_prof);

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
