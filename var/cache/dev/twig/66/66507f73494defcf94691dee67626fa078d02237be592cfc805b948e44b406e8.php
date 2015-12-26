<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_18d7ff8015c36bd1786f3adb370e777a88b1c76aed4ddcc87304c409fdc90c82 extends Twig_Template
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
        $__internal_8516343feb0bf58eb8eefa4b82c72a4ab12bf243ffed24bf2d38d31ec45da2bc = $this->env->getExtension("native_profiler");
        $__internal_8516343feb0bf58eb8eefa4b82c72a4ab12bf243ffed24bf2d38d31ec45da2bc->enter($__internal_8516343feb0bf58eb8eefa4b82c72a4ab12bf243ffed24bf2d38d31ec45da2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_8516343feb0bf58eb8eefa4b82c72a4ab12bf243ffed24bf2d38d31ec45da2bc->leave($__internal_8516343feb0bf58eb8eefa4b82c72a4ab12bf243ffed24bf2d38d31ec45da2bc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
