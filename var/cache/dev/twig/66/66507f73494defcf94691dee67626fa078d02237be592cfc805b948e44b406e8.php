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
        $__internal_34b477160cf69ed62d2f14129b60f692e68ad902df8bb1f3797df82fe373bf04 = $this->env->getExtension("native_profiler");
        $__internal_34b477160cf69ed62d2f14129b60f692e68ad902df8bb1f3797df82fe373bf04->enter($__internal_34b477160cf69ed62d2f14129b60f692e68ad902df8bb1f3797df82fe373bf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_34b477160cf69ed62d2f14129b60f692e68ad902df8bb1f3797df82fe373bf04->leave($__internal_34b477160cf69ed62d2f14129b60f692e68ad902df8bb1f3797df82fe373bf04_prof);

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
