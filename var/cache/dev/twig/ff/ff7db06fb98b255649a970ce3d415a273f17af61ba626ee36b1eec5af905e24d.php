<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_1a694e4f13860388b349383965a57a026705f3da38fdff234abe54e015bcedec extends Twig_Template
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
        $__internal_5ad6cbfa5bfe76b1b1d6ed044a5c8e2e105d6bc5c4714a2ce04615506ad074b3 = $this->env->getExtension("native_profiler");
        $__internal_5ad6cbfa5bfe76b1b1d6ed044a5c8e2e105d6bc5c4714a2ce04615506ad074b3->enter($__internal_5ad6cbfa5bfe76b1b1d6ed044a5c8e2e105d6bc5c4714a2ce04615506ad074b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_5ad6cbfa5bfe76b1b1d6ed044a5c8e2e105d6bc5c4714a2ce04615506ad074b3->leave($__internal_5ad6cbfa5bfe76b1b1d6ed044a5c8e2e105d6bc5c4714a2ce04615506ad074b3_prof);

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
